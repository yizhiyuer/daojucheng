<?php
for ($i=1;$i<=9;$i++){
    for($j=1;$j<=$i;$j++){
        echo "{$i}x{$j}=".($i*$j);
        echo "\t";
    }
    echo "\n";
}