<?php
	$i = 0;
	while ( ++$i ) {                         								//外层使用一个while语句的循环
  		switch ($i) {                      									//内层使用一个switch语句
			case 5:
				echo "变量为5时，只退出switch语句<br>";
				break 1;                									//使用break 1退出1层
			case 10:
				echo "当变量为10时，不仅退出switch而且还退出while循环<br>";
				break 2;                									//使用break 2退出2层
        }
	}
