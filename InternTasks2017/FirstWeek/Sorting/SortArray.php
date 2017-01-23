<?php

$people = array(
    "Petar" => array(
        "physics" => 35,
        "chemistry" => 39,
        "maths" => 30,
    ),
    "Yavor" => array(
        "physics" => 30,
        "maths" => 32,
        "chemistry" => 29
    ),
    "Zara" => array(
        "physics" => 31,
        "maths" => 22,
        "chemistry" => 39
    ),
    "Angel" => array(
        "physics" => 31,
        "maths" => 22,
        "chemistry" => 39
    )
);

var_dump($people);

$keys = array_keys($people);
$sorted = [];


function insertion_sort($arr)
{       
    $len = count($arr);
    
    for ($i = 0; $i < $len; $i++) {
        $j = $i;
        while ($j > 0 && $arr[$j] < $arr[$j-1]) {
            $tmp = $arr[$j-1];
            $arr[$j-1] = $arr[$j];
            $arr[$j] = $tmp;
            $j--;
        }
    }

    return $arr;
}


foreach (insertion_sort($keys) as $key) {
    $sorted[$key] = $people[$key];
}

var_dump($sorted);
?>