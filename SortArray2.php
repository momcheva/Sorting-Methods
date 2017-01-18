<?php
$arr = [4, 6, 10, 5, 1, 3];

$len = count($arr);

for($i=0; $i<$len - 1; $i++){
    $min = $arr[$i];
    $k = $i;
    for($j=$i+1; $j<$len; $j++){
        if($arr[$j]<$min) {
            $k = $j;
            $min = $arr[$k];
        }

        $arr[$k] = $arr[$i];
        $arr[$i] = $min;
    }
}

print_r($arr);
var_dump($arr);
?>