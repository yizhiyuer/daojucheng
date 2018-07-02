<meta charset="UTF-8">
<?php
//get 请求的格式:  路径 ? 参数1=值1&参数2=值2&...&参数n=值n
//http://localhost/day6/6-GET.php?name=wes.luo&age=33
var_dump("接收Get请求参数：" , $_GET);