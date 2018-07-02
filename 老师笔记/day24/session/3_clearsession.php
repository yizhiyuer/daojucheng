<?php
session_start();
//...
unset($_SESSION["mySessInfo"]);

header("Location:./2_getsession.php");