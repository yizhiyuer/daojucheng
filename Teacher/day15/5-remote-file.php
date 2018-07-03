<?php
//练习：利用 file_get_contents 访问远程文件，并将读取的内容保存到本地中；
//保存：file_put_contents；
//远程文件：http://qq.com;

$page = file_get_contents("http://36kr.com/");
echo $page;
$pagefile = "./files/36kr.html";
file_put_contents($pagefile,$page);


//练习：实现留言板；
//1.要求有html实现的界面；
//2.要求表单提交留言信息；
//3.要求提交的留言信息保存到一个文件中（换行 /r/n）
//4.要求用 table 表格实现 留言信息分行显示；
//5.最好使用 bootstrap 美化界面
