<?php

include 'test.php';


Hello();


$data = file_get_contents ("newjson.json");
$json = json_decode($data, true);

var_dump($json);


$arr = array('2' => '5', '1' => '6', '3'=>'4');

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


$keys = array_keys($arr);
$values = array_values($arr);
$sorted = [];
$sortedVals = [];

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
    $sorted[$key] = $arr[$key];
}

foreach(insertion_sort($values) as $value){
    $sortedVals[$value] = $arr[$value];
}

var_dump($sorted);
var_dump($sortedVals);

/*
foreach($arr2 as $key=>$value){
   $val = $arr2[$key];
   foreach($arr2 as )
   $val = $key;
}

//$arr2 = array('2' => '5', '1' => '6', '3'=>'4');

/*
var_dump($arr2);

$len = count($arr2);

// Version 2
foreach($arr2 as $key => $value){
    $curr = $value;
  
    for($j=0; $j<$len-1; $j++){
        
        $next = $arr2[$key];
        //$next = $arr2[$j+1];
        
        if($curr>$next){
            $temp = $curr;
            $curr = $next;
            $next = $temp;
        }
    }
}

var_dump($arr2);
*/

/*

for ($i = 0; $i < $cnt - 1; $i++) {
    $curr = $arr[$i];
    $next = $arr[$i + 1];
        
    if ($curr < $next) {
        $temp = $arr[$i + 1];
        $arr[$i + 1] = $arr[$i];
        $arr[$i] = $temp;
    }
}
*/


?>