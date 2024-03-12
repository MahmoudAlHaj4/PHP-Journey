<?php

function filterNumbers($arr,$str){
    for ($i = 0; $i < strlen($str); $i++) {
        if (is_numeric($str[$i])) {
            $arr[] = $str[$i];
        }
    }
    sort($arr);
    print_r($arr);
};
$str = "hpd16aq3@8w$5";
$arr =[];
filterNumbers($arr,$str);
