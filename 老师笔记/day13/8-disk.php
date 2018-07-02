<?php
$can_use_space = disk_free_space("C:");
echo "C盘可用空间：".$can_use_space."字节\n";
echo "C盘可用空间：".($can_use_space/1024)."K\n";
echo "C盘可用空间：".($can_use_space/pow(1024,2))."M\n";
echo "C盘可用空间：".($can_use_space/pow(1024,3))."G\n";

$total_space = disk_total_space("D:");
echo "D盘总共空间：".($total_space/pow(1024,3))."G\n";
$free_space = disk_free_space("D:");
//练习：获取 D: 盘当前已经使用的空间；
$usedspace = (($total_space-$free_space)/pow(1024,3));
echo "D盘已使用空间：".$usedspace."G\n";
?>
<!--<script>
    Math.pow()
</script>-->
