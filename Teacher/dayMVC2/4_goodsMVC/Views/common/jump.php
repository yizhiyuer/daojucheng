<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>提示信息</title>
</head>
<body>
    <h2>提示：<?php echo $msg?>，<span id="sec"></span>s跳转</h2>
<script>
    secnum="<?php echo $sec ?>";
    secnum = parseInt(secnum);
    sec=document.querySelector("#sec");
    sec.innerHTML=secnum;
    setInterval(function(){
        secnum--;
        sec.innerHTML=secnum;
        if(secnum==0){
            location.href="<?php echo $url ?>";
        }
    },1000);
</script>
</body>
</html>