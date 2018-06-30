<?php
header("Content-type: text/html; charset=utf-8");
$cname=isset($_GET['cname'])?$_GET['cname']:"南宁";
$ch = curl_init();
    $url = 'http://apis.baidu.com/apistore/weatherservice/recentweathers?cityname='.$cname;
    $header = array(
        'apikey: 42cdb7dbb5caccf59414792c2486097e',
    );
    // 添加apikey到header
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);

    echo $res;