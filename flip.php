<?php

function flip($num){
    $num = strrev($num);
    $newNum = intval($num);
    echo $newNum;
}
$strNum = "25";
flip($strNum);