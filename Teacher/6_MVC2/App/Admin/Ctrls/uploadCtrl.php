<?php

if($view==="doup"){
    $mainDir="Uploads";
    if(!file_exists($mainDir)){
        mkdir($mainDir); //1.创建存放上传文件的主目录
    }
    date_default_timezone_set("Asia/Shanghai");//校正时区
    $dateDir= date("Y-m-d");//2.创建日期目录；
    if(!file_exists("./$mainDir/$dateDir")){
        mkdir("./$mainDir/$dateDir");
    }
//3.用时间戳加随机数命名文件;
    $houzui = explode('.',$_FILES["files"]["name"]);
//var_dump($houzui);
    $houzui = $houzui[ count($houzui)-1 ];
//var_dump($houzui);
    $filename=time()."_".rand(10000,99999).".$houzui";
//4.转移文件：将临时的文件转移到指定的文件夹中；
    $issuc = move_uploaded_file
    ($_FILES["files"]["tmp_name"],"./$mainDir/$dateDir/$filename");

//5.返回数据接口
    if($issuc){
        echo json_encode( [ "code"=>1,"msg"=>"文件上传成功","filepath"=>"./$mainDir/$dateDir/$filename" ] );
    }else{
        echo json_encode( [ "code"=>0,"msg"=>"文件上传失败","filepath"=>"./$mainDir/$dateDir/$filename" ] );
    }
}

