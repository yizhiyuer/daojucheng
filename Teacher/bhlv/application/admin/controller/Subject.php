<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;

class Subject extends Controller
{
    function index(){
        $subList= Db("subject")->select();
//        dump($subList);
        $this->assign("sublist",$subList);
        return view();
    }

    function dodel(){
        $res = Db("subject")->delete(input("id"));
        if($res){
            $this->success("删除成功！",url("subject/index"));
        }else{
            $this->error("删除失败！");
        }
    }
}