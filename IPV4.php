<?php

function checkIp($ip){
    $arr = explode(".",$ip);
    if(count($arr) !== 4){
        echo "Invalid IP";
    }else {
        print_r($arr) ;
    }
    
}
$ip = "192.65.52.69";
checkIp($ip);