<?php
//时区校正
//date_default_timezone_set("Etc/GMT-8"); // Asia/Shanghai     	//设置东八区的时间时区
echo "当前时区:".date_default_timezone_get()."\n";
echo "当前时间:".date("Y-m-d H:i:s",time())."\n";	//通过date()函数获取当前时间输出
echo time();
	$hour = @date("H");		//获取服务器时间中当前的小时，作为分时问候的条件
	if( $hour < 6 ) {		//如果当前时间在6点以前，执行下面的语句块
        echo "凌晨好!";
    } else if ( $hour < 9 ) {	//如果当前时间在6点之后和9点以前，执行下面的语句块
        echo "早上好!";
    } elseif ( $hour < 12 ) {	//如果当前时间在9点之后和12点以前，执行下面的语句块
        echo "上午好!";
    } elseif ( $hour < 14 ) {
        echo "中午好!";
    } elseif ( $hour < 17 ) {
        echo "下午好!";
    } elseif ( $hour < 19 ) {
        echo "傍晚好!";
    } elseif ( $hour < 22 ) {
        echo "晚上好!";
    }else {
            echo "夜里好!";
        }
