<?php
//$sql = "select * from tablename";
class Db{
    private $sql;
    function __call($name, $arguments)
    {
        $this->sql[$name] = $arguments; //$arguments是数组
        return $this;
    }
    function select(){
        //组装语句，并执行；
        $sqlstr = "select %s from %s %s\n";
        $fieldstr = isset($this->sql["field"][0])?$this->sql["field"][0]:"*";
        $tablestr = $this->sql["table"][0];
        $wherestr = isset($this->sql["where"][0])?(" where ".$this->sql["where"][0]):"";
        echo sprintf($sqlstr,$fieldstr,$tablestr,$wherestr);
    }
}
$db = new Db();
$db ->table("help_topic")
    ->field("name,url,help_topic_id")
    ->where("help_topic_id <20")
    ->select();