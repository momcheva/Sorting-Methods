<?php
//Sorting Only Keys 
$people = array(
    "Petar" => array(
        "physics" => 35,
        "maths" => 30,
        "chemistry" => 39
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


$keys = array_keys($people);
$sorted = [];

foreach (insertion_sort($keys) as $key) {
    $sorted[$key] = $people[$key];
}

/*
foreach($people as $key => $value){
    
   if (is_array($value)){
       
        $array = $value;
        
        foreach (insertion_sort($array) as $val) {
            $sortedValues[$val] = $people[$val];
        }
    }
}

var_dump($sorted);
 
 */

//PRINTING
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
  
?>
             

        
 


