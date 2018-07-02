<?php

class DBModel
{
    const DSN = 'mysql:dbname=school;host=127.0.0.1';
    const USER = 'root';
    const passwd = 'root';
    private $dblink;//私有权限的数据库链接对象
   function __construct()
{
//todo:链接数据库
    try {
        $this->dblink = new PDO(self::DSN,
                       self::USER,
                       self::passwd);
        $this->dblink->query("set names utf8");
    } catch (PDOException $e) {
        die ('Connection failed: ' . $e->getMessage());
    }
}
function __destruct()
{
    unset($this->dblink);// 释放链接对象
}
function mkexe($sqlstr=null){
       if($sqlstr==null){
           return false;
       }
      $res = $this->dblink->exec($sqlstr);
    if($res>0){
        return true;
    }else{
        return false;
    }
}
//功能：执行查询，并返回结果集
//@param null $sqlselect
//@return bool|mixed
function gets($sqlselect=null){
       if($sqlselect==null){
           return false;
       }
       $pdostm = $this->dblink->query($sqlselect);//执行查询语句
    $resArr = $pdostm->fetchAll(PDO::FETCH_ASSOC);//$pdostm取出结果集
    if($resArr){
        return $resArr;
    }else{
        return false;
    }
}

function getOne($sqlselect=null){
          if($sqlselect==null){
           return false;
       }
    $pdostm =$this->dblink->query($sqlselect);
    $res =$pdostm->fetch(PDO::FETCH_ASSOC);
    if($res){
    return $res;
    }else{
        return false;
    }
   }
}