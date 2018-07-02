<?php
class DBModel
{
    const DSN = 'mysql:dbname=myshop2;host=127.0.0.1';
    const USER = 'root';
    const passwd = 'root';
    private $dblink;//私有权限的数据库连接对象；
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
            die('Connection failed: ' .
                $e->getMessage());
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
    function mkexe($sqlstr=null){
        if($sqlstr==null){
            return false;
        }
        $res  = $this->dblink->exec($sqlstr);
        if($res>0){
            return true;
        }else{
            return false;
        }
    }

    /**
     * 功能：执行查询，并返回结果集
     * @param null $sqlselect
     * @return array|bool
     */
    function gets($sqlselect=null){
        if($sqlselect==null){
            return false;
        }
        $pdostm = $this->dblink->query($sqlselect);
        //执行查询语句
        $resArr = $pdostm->fetchAll(PDO::FETCH_ASSOC);
        //$pdostm取出结果集
        if($resArr){
            return $resArr;
        }else{
            return false;
        }
    }
    /**
     * 功能：执行查询，并返回一行记录
     * @param null $sqlselect
     * @return bool|mixed
     */
    function getOne($sqlselect=null){
        if($sqlselect==null){
            return false;
        }
        $pdostm = $this->dblink->query($sqlselect);
        $res = $pdostm->fetch(PDO::FETCH_ASSOC);
        if($res){
            return $res;
        }else{
            return false;
        }
    }

    /**
     * 把上述insert的处理代码封装到DBModel
    的一个addstr($table,$fields) 方法中,
    返回一个完整的 insert 语句；
     * @param $table
     * @param $fields
     * @return string
     */
    function addStr($table,$fields){
        //把$_POST数组键值对分离，再分别组装 keys 和 values
        $keys = array_keys($fields);
        $keys_str = join(",",$keys);
        $values = array_values($fields);
        $values_str = join("','",$values);
        /*$sql = "insert into goods(sname,price,storenum,detail)
        values('".$_POST['sname']."','".$_POST['price']."',
        '".$_POST['storenum']."','".$_POST['detail']."')";*/
        $sql="insert into $table($keys_str) values('$values_str')";
        return $sql;
    }

    function updStr($table,$fields,$pkname=null){
        $setarr = [];
        foreach ($fields as $k=>$v){
            $temp = "$k= '$v'";
            array_push($setarr,$temp);
        }
        $setStr = join(",",$setarr);
        if($pkname!=null){
            $pk = $fields[$pkname];//取出主键的值
            unset($fields[$pkname]);//销毁主键在数组中的元素
            $sql = "update $table set $setStr 
                    where $pkname = '$pk'";
        }else{
            $sql = "update $table set $setStr";
        }
        return $sql;
    }
}