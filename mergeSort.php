<?php

function mergeSort(&$arr){
    if(count($arr)>1){
        $mid = count($arr) / 2;
        $leftArr = array_slice($arr, 0, $mid);
        $righArr = array_slice($arr, $mid);

        mergeSort($leftArr);
        mergeSort($righArr);

        $leftIndex = 0;
        $righIndex = 0;
        $mergeIndex = 0;

        while($leftIndex < count($leftArr) && $righIndex < count($righArr)){
            if($leftArr[$leftIndex] < $righArr[$righIndex]){
                $arr[$mergeIndex] = $leftArr[$leftIndex];
                $leftIndex +=1;
                $mergeIndex +=1;
            }else {
                $arr[$mergeIndex] = $righArr[$righIndex];
                $righIndex += 1;
                $mergeIndex += 1;
            }
        }

        while($leftIndex < count($leftArr)){
            $arr[$mergeIndex] = $leftArr[$leftIndex];
            $leftIndex += 1;
            $mergeIndex += 1;
        }
        while($righIndex < count($righArr)){
            $arr[$mergeIndex] = $righArr[$righIndex];
            $righIndex += 1;
            $mergeIndex +=1;
        }
    }
}

$arr = [5,6,9,7,8,2,1,3,4];
mergeSort($arr);
print_r($arr); 