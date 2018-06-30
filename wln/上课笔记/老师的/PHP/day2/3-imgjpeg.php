<?php
//header('Content-Type: text/html'); //默认text/html
header('Content-Type: image/jpeg');
// 创键空白图像并添加一些文本
$im = imagecreatetruecolor(120, 120);
$text_color = imagecolorallocate($im, 0, 255, 0);
imagestring($im, 26, 5, 5,  'PHP生成图片', $text_color);

// 设置内容类型标头 —— 这个例子里是 image/jpeg



// 输出图像
imagejpeg($im);

// 释放内存
imagedestroy($im);