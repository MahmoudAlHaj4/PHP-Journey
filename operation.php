<?php

function evaluateOperation($operation, $num1,$num2){

    $result = 0;
    switch ($operation) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '*':
            $result = $num1 *$num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '/':
            
            if ($num1 !==0 || num2 !== 0) {
                $result = $num1 / $num2;
            }else{
                echo "Error: Division by zero";
            }
            break;
        case '%':
            $result = $num1 % $num2;
            break;
        default:
            echo "Invalid operation";
            
    }
    echo $result;
}
$operation = "-";
$num1 = 5;
$num2 = 5;
evaluateOperation($operation, $num1,$num2);