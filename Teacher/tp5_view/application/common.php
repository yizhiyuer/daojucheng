<?php

/**
 * @param $str
 * @return string
 * 扩展函数
 */
function test($str){
    $limitstr = mb_strlen($str,"UTF-8");// 判断长度
    if($limitstr>18){
        return mb_substr($str,0,16,'UTF-8')."...";
    }else{
        return $str;
    }
}

function test2($str){
    $limitstr = mb_strlen($str,"UTF-8");// 判断长度
    if($limitstr>18){
        return mb_substr($str,0,16,'UTF-8')."~~";
    }else{
        return $str;
    }
}

function hideNo($str){
    $len = strlen($str);
    $newstr="";
    if($len==11){
        for($i=0;$i<$len;$i++){
            if($i>=3 && $i<=6){
                $newstr.="*";
                continue;
            }
            $newstr.= $str[$i];
        }
    }else if($len==18){
        for($i=0;$i<$len;$i++){
            if($i>=3 && $i<=13){
                $newstr.="*";
                continue;
            }
            $newstr.= $str[$i];
        }
    }else{
        return "不是有效号码";
    }
    return $newstr;
}

