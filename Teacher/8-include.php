<?php
include './files/file-1.php';//包含文件路径错误时，不直接终止程序
//require './files/file-2.php'; //包含文件路径错误时，直接终止程序
require './4-static.php';
//$filevar ="file1中的变量";
//include 和 require 把文件中的内容包含进当前文件
echo "\n".$filevar;

//include 一般用于包含html等模板文件；
//require 一般用于包含php程序文件或类文件；