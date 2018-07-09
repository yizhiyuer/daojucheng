<?php
/**
 * Created by PhpStorm.
 * User: adger.lai
 * Date: 2018/7/6
 * Time: 17:07
 */


class user
{

    function userLogin($userName, $userPassword, $codeText)
    {
        session_start();
        require_once "../models/DBModel.class.php";
        $dbAct = new DBModel();
        if (strtolower($codeText) != $_SESSION["vCodeProd"]) {//验证码错误
            $_SESSION['error'] = 'vCode';//设置验证码错误session->验证码不通过不会校验账号密码
            header('Location:../../../index.php');//带参数跳转index 重新登录
        } else {
            $sql = "select * from user where name='$userName' and password='$userPassword' and admin='1'";// 查询数据库语句
            $actRes = $dbAct->getOne($sql);//数据库执行语句 并返回结果
            if (!$actRes) {//判断返回结果 跳转相应页面 ↓
                $_SESSION['error'] = 'user';//设置账号密码错误session
                header('Location:../../../index.php');//带参数跳转index 重新登录
            } else {
                $_SESSION['act']='main';$_SESSION['view']='main';
                header('Location:../../../index.php');//登录成功 跳转主页 携带相应参数显示相应页面
            }
        }
//        echo "<script>console.log('$userName', '$userPassword', '$codeText')</script>";
    }
}

$userAct = new user();

$view = isset($_GET["act_view"]) ? $_GET["act_view"] : "login";
if ($view === "login") {
    //todo:操作相关代码；

    if (isset($_SESSION["error"])) {//验证码错误 显示提示
        switch ($_SESSION["error"]) {
            case 'user':
                echo "<script>alert('\\n请确认：\\n\\n★用户名或密码错误★\\n\\n★不是管理员身份★')</script>";
                break;
            case 'vCode':
                echo "<script>alert('\\n请确认：\\n\\n★验证码错误★')</script>";
                break;
            default:
                echo "<script>alert('\\n请确认：\\n\\n★意外的错误，请联系管理员★')</script>";
        }
        unset($_SESSION["error"]);


    }

    include $view_url;
}

if ($view === 'online') {

    $userAct->userLogin($_POST['user_name'], $_POST['user_password'], $_POST['codes_text']);
}

