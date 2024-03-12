<?php

function convert($decimalNumber){
$binary = decbin($decimalNumber);

echo $binary;
}
$decimalNumber = 12;
convert($decimalNumber);