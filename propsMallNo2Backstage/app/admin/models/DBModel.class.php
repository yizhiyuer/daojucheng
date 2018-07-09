<?php
class DBModel
{
    const DSN = 'mysql:dbname=sq_shark;host=mysql.sql159.cdncenter.net';
    const USER = 'sq_shark';
    const passwd = 'laijunjiE1342Wln';
    private $dblink;//私有权限的数据库连接对象；

    /*
     *跳转
     *@param $url 目标地址
     *@param $info 提示信息
     *@param $sec 等待时间
     *return void
    */
    function jump404($url, $info = null, $sec = 0)
    {
        if (is_null($info)) {
            header("Location:$url");
        } else {
            // header("Refersh:$sec;URL=$url");
            echo "<meta http-equiv=\"refresh\" content=" . $sec . ";URL=" . $url . ">";
            echo $info;
        }
        die;
    }

    function __construct()
    {
        header("Content-type:text/html;charset=utf-8");
        //todo:连接数据库
        try {
            $this->dblink = new PDO(
                self::DSN,
                self::USER,
                self::passwd);
            $this->dblink->query("set names utf8");
            //处理中文入库编码问题
        } catch (PDOException $e) {
//            echo "连接失败";
//            die('Connection failed: ' .
//                $e->getMessage());
            $_SESSION["db"]=array('数据库连接错误','用户名或密码错误','数据库服务器未开启','网络连接超时');
            $this->jump404('./app/admin/view/404.php?error=db');
        }
    }

    function __destruct()
    {
        unset($this->dblink);//释放连接对象
    }

    /**
     * 功能：执行增、删、改 sql语句
     * @param null $sqlstr
     * @return bool
     */
    function mkexe($sqlstr = null)
    {
        if ($sqlstr == null) {
            return false;
        }
        $res = $this->dblink->exec($sqlstr);
        if ($res > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 功能：执行查询，并返回结果集
     * @param null $sqlselect
     * @return array|bool
     */
    function gets($sqlselect = null)
    {
        if ($sqlselect == null) {
            return false;
        }
        $pdostm = $this->dblink->query($sqlselect);
        //执行查询语句
        $resArr = $pdostm->fetchAll(PDO::FETCH_ASSOC);
        //$pdostm取出结果集
        if ($resArr) {
            return $resArr;
        } else {
            return false;
        }
    }

    /**
     * 功能：执行查询，并返回一行记录
     * @param null $sqlselect
     * @return bool|mixed
     */
    function getOne($sqlselect = null)
    {
        if ($sqlselect == null) {
            return false;
        }
        $pdostm = $this->dblink->query($sqlselect);
        $res = $pdostm->fetch(PDO::FETCH_ASSOC);
        if ($res) {
            return $res;
        } else {
            return false;
        }
    }

    /**
     * 把上述insert的处理代码封装到DBModel
     * 的一个addstr($table,$fields) 方法中,
     * 返回一个完整的 insert 语句；
     * @param $table
     * @param $fields
     * @return string
     */
    function addStr($table, $fields)
    {
        //把$_POST数组键值对分离，再分别组装 keys 和 values
        $keys = array_keys($fields);
        $keys_str = join(",", $keys);
        $values = array_values($fields);
        $values_str = join("','", $values);
        /*$sql = "insert into goods(sname,price,storenum,detail)
        values('".$_POST['sname']."','".$_POST['price']."',
        '".$_POST['storenum']."','".$_POST['detail']."')";*/
        $sql = "insert into $table($keys_str) values('$values_str')";
        return $sql;
    }

    function updStr($table, $fields, $pkname = null)
    {
        $setarr = [];
        foreach ($fields as $k => $v) {
            $temp = "$k= '$v'";
            array_push($setarr, $temp);
        }
        $setStr = join(",", $setarr);
        if ($pkname != null) {
            $pk = $fields[$pkname];//取出主键的值
            unset($fields[$pkname]);//销毁主键在数组中的元素
            $sql = "update $table set $setStr 
                    where $pkname = '$pk'";
        } else {
            $sql = "update $table set $setStr";
        }
        return $sql;
    }
}

//练习：完成 资讯文章信息表 的 管理(CURD)功能;
//资讯文章信息表:文章id，文章标题title，文章内容content,发布日期addtime