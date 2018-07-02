<?php
function changeNum($num){
    switch ($num){
        case 0:
            echo "零";break;
        case 1:
            echo "壹";break;
        default:
            echo "其他";break;
    }
}
changeNum(12);