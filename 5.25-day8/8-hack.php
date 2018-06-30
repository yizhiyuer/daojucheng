<meta charset="UTF-8">
<?php
//$script = "<script>document.onclick=function(){console.log('触发信息收集并发送',','+document.getElementById('uname').value,','+document.getElementById('passwd').value);}</script>";
//$script = htmlentities($script); //uname = document.getElementById('uname').value;passwd = document.getElementById('passwd').value;
$script = $_POST["content"];
$script = htmlentities($script);
//转义html代码，保证一定安全性
echo "网页内容：....".$script;
?>
<br>
<input type="text" name="uname" id="uname">
<br>
<input type="password" name="passwd" id="passwd">

