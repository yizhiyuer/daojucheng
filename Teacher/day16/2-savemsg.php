<meta charset="UTF-8">
<?php
//var_dump($_POST);
$_POST["letime"] = date("Y-m-d H:i:s");
$msgstr = join("-@*@*@*@*@-",$_POST);

//echo $msgstr;
$filename = "./msgbox-file/msbox-file.txt";
$w_res = file_put_contents($filename,$msgstr."\n\r",FILE_APPEND);
echo "写入".($w_res?"$w_res 字节，成功":"失败");
sleep(2);
if ($w_res){
    echo "<script>
setTimeout(function() {
  window.location.href='./3-showmsgs.php';
  },3000);
</script>";
    sleep(3);
    header("Location:./3-showmsgs.php");
}