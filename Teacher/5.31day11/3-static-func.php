<?php
function sta_func(){
    static $n=0;
    return ($n++)."\n";
}

