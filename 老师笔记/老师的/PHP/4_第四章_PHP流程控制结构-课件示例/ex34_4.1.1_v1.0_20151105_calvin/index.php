<?php
    $week = date("D");   	//通过date函数获取当前系统日期
    switch( $week ) {
        case "Mon":		echo "星期一";  break;                
        case "Tue":		echo "星期二";  break;                    
        case "Wed":		echo "星期三";  break;                    
        case "Thu":		echo "星期四";  break;              
        case "Fri":		echo "星期五";  break;           
        case "Sat":		echo "星期六";  break;        
        case "Sun":		echo "星期日";  break;        
    }   

    switch( $i ) {                             //条件表达式是一个变量$i
        case 2:                                 //和值2匹配时，没有break，将控制转移到下一个case中的语句
        case 3:                                 //和值3匹配时，执行下面的语句块
            echo "\$i和值2或3任一个匹配"; 
            break;                              //退出switch语句
        case 4:                                 //和值为3匹配上时，执行下面的语句块
            echo "\$i和值4匹配时，才会执行";      
            break;                              //退出switch语句
        default:                                //匹配任何和其他case都不匹配的情况, 要放在最后一个case之后
            echo "\$i没有匹配的值时，才会执行";     
    }
?>