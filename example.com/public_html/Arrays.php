<?php

$arr = array(4, 1, 9, 8, 5, 2, 10);
$arr2 = array('1' => '5', '2' => '6', '3'=>'4');

/*
$arr = array(4, 1, 9, 8, 5, 2, 10);
$sortedArr = bubbleSort($arr);
var_dump($sortedArr);


function bubbleSort(array $arr) {
    $sorted = false;
    $len = count($arr)-1;
     
    while (false === $sorted) {
        $sorted = true;
       
        
        for ($i = 0; $i < $len; ++$i) {
            $current = $arr[$i];
            $next = $arr[$i+1];
            
            if ($next < $current) {
                $arr[$i] = $next;
                $arr[$i+1] = $current;
                $sorted = false;
            }
        }
    }
    return $arr;
}
*/


$len = count($arr);

//Version 1

for($i=0; $i<$len - 1; $i++){
    $min = $arr[$i];
    $k = $i;
    
    for($j=$i+1; $j<$len; $j++){
        if($arr[$j]<$min) {
            $k = $j;
            $min = $arr[$k];
        }
    }
        $arr[$k] = $arr[$i];
        $arr[$i] = $min;
    
}

print_r($arr);
var_dump($arr);


// Version 2

for($i=0; $i<$len; $i++){
    for($j=0; $j<$len-1-$i; $j++){
        if($arr[$j]>$arr[$j+1]){
            $temp = $arr[$j];
            $arr[$j] = $arr[$j+1];
            $arr[$j+1] = $temp;
        }
    }
}

var_dump($arr);


//Version 3
function sortArray($arr) {
    $sorted = [];

    for ($i = 0; $i < $len-1; $i++) {
        $min = $i;
        
        for ($j = $i + 1; $j < $len; $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }

        if ($min != $i) {
            $temp = 0;
            $temp = $arr[$i];
            $arr[$i] = $arr[$min];
            $arr[$min] = $temp;
        }
    }

    for ($i = 0; $i < $len; $i++) {
        sorted.push(arr[i]);
    }

    jsConsole.writeLine(sorted.join(', '));
    
}
?>
