<?php
setcookie("myname",'',time()-1);
header("Location:./2_getcookie.php");