<?php
/**
 * Created by PhpStorm.
 * User: adger.lai
 * Date: 2018/7/6
 * Time: 17:07
 */


//$name = 'wln';
//$password = '956555';
//session::set($name, $password);
//echo session::get('wln'); // 未过期，输出

class user
{
    /*
     * userLogin()用户登录方法
     * 1.引入登录状态超时检测
     * 2.引入数据库
     * 3.校验->验证码
     * 4.查询数据库->账号、密码、管理员身份
     * */
    function userLogin($userName, $userPassword, $codeText)
    {
        session_start();//启用session会话储存信息
        require_once "../models/autoDetection.php";
        require_once "../models/DBModel.class.php";
        $dbAct = new DBModel();
        if (strtolower($codeText) != $_SESSION["vCodeProd"]) {//验证码错误
            $_SESSION['error'] = 'vCode';//存->验证码错误session->验证码不通过不会校验账号密码
            header('Location:../../../index.php');//跳转index 重新登录
        } else {
            $sql = "select * from user where name='$userName' and password='$userPassword' and admin='1'";// 查询数据库语句
            $actRes = $dbAct->getOne($sql);//数据库执行语句 并返回结果
            if (!$actRes) {//判断返回结果 跳转相应页面 ↓
                $_SESSION['error'] = 'user';//设置账号密码错误session
                header('Location:../../../index.php');//index 重新登录
            } else {
                session::set("user", ["$userName", md5("$userPassword")]);//登录超时控制时间
                $_SESSION['act'] = 'main';//控制器session Ctrl
                $_SESSION['view'] = 'main';//视图session View
                header('Location:../../../index.php');//登录成功 跳转主页
            }
        }
    }

    /*
     * userOut() 退出登录
     * */
    function userOut()
    {
        session_start();
        require_once "../models/autoDetection.php";
        $_SESSION['act'] = 'login';
        $_SESSION['view'] = 'login';
        unset($_SESSION["user"]);
        header('Location:../../../index.php');
    }

    /*
     * errorTip()错误提示
     * */
    function errorTip()
    {
        if (isset($_SESSION["error"])) {//检测session是否有错误提示
            switch ($_SESSION["error"]) {
                case 'user':
                    echo "<script>alert('\\n请确认：\\n\\n★用户名或密码错误★\\n\\n★不是管理员身份★')</script>";
                    break;
                case 'vCode':
                    echo "<script>alert('\\n请确认：\\n\\n★验证码错误★')</script>";
                    break;
                case 'timeOut':
                    echo "<script>alert('\\n★长时间未操作，请重新登录★')</script>";
                    break;
                default:
                    echo "<script>alert('\\n请确认：\\n\\n★意外的错误，请联系管理员★')</script>";
            }
            unset($_SESSION["error"]); //清空session错误信息
        }
    }
}
$userAct = new user();

$view = isset($_GET["act_view"]) ? $_GET["act_view"] : "login";//默认登录页面
if ($view === "login") {
    //todo:操作相关代码；
    $userAct->errorTip();//调用->错误提示
    include $view_url; //加载view文件
}

if ($view === 'online') { //点击登录生效
    $userAct->userLogin($_POST['user_name'], $_POST['user_password'], $_POST['codes_text']);//调用->登录方法->检验->验证码\账号\密码
}

if ($view === 'signOut') {
    $userAct->userOut();//调用->退出登录
}
