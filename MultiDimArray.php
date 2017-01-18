<?php


$arr = [4, 6, 10, 5, 1, 3];
$len = count($arr);
for($i=0; $i<$len; $i++){
    for($j=0; $j<$len-1-$i; $j++){
        if($arr[$j]>$arr[$j+1]){
            $temp = $arr[$j];
            $arr[$j] = $arr[$j+1];
            $arr[$j+1] = $arr[$j];
        }
    }
}

var_dump($arr);
