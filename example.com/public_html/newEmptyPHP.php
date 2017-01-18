<?php

foreach ($people as $key=>$value)
{
    
    $key.'<br/>';

}      
      
 for($i=0; $i<count($people); $i++)
 {
     for($j=$i+1; $j<=count($people)-i; $j++)
     {
                
        if ($people[$i] > $people[$j]){
            $temp = $people[$i];
            $people[$i] = $people[$j];
            $people[$j] = $temp;
            
        }
     }
 }
 
 foreach ($v as $k2 => $v2) {
                 $sortByValue[$k] = $v2;
             }
         } else {
             $sortByValue[$k] = $v;
        } 
             
     }
     
     foreach ($sortByValue as $k => $v) {
            
         $sortByKey[$k] = $people[$k];
     }
     
     var_dump($sortByKey);
     var_dump($sortByValue);
     
     for($i = 0; $i < $len-1; $i++) {
         $min = $i;
            for ($j = $i+1; $j < $len; $j++){
                if ($keys[$j] > $keys[$min]) {
                    $min = $j;
                    $temp = $keys[$i];
                    $keys[$i] = $keys[$min];
                    $keys[$min] = $temp;
            }
         }             
     }
     

     var_dump($keys);
     
      foreach($people as $key => $v){
        
         array_push($keys, $key);
     }
     
     foreach($people as $key => $val) { 
         if(is_array($val)){
             
             foreach($val as $k => $v){
     
            array_push($values, $k);
        }
     }
             
     
     for($i = $len-1; $i >= 0; $i--) {
         
            for ($j = 1; $j <= $i; $j++){
                if ($keys[$j-1] > $keys[$j]) {
                    
                    $temp = $keys[$i-1];
                    $keys[$j-1] = $keys[$j];
                    $keys[$j] = $temp;
            }
         }             
     }
     
    for($i = $len-1; $i >= 0; $i--) {
         
            for ($j = 1; $j <= $i; $j++){
                if ($values[$j-1] > $values[$j]) {
                    
                    $temp = $values[$i-1];
                    $values[$j-1] = $values[$j];
                    $values[$j] = $temp;
            }
         }             
     }
     
     
     
    SORTING
    $len = count($people);
    $keys = [];
    
    foreach($people as $key => $v){
        
         array_push($keys, $key);
     }
         
     
     for($i = $len-1; $i >= 0; $i--) {
         
            for ($j = 1; $j <= $i; $j++){
                if ($keys[$j-1] > $keys[$j]) {
                    
                    $temp = $keys[$i-1];
                    $keys[$j-1] = $keys[$j];
                    $keys[$j] = $temp;
            }
         }             
     }
    
    
     
    var_dump($keys);


/*
function recursive($arr){
    foreach($arr as $key => $value) {
        
        $keys = array_keys($arr);
        
         for ($i = 0; $i < count($keys); $i++) {
          $j = $i;
          
          while ($j > 0 && $keys[$j] < $keys[$j-1]) {
                    $tmp = $keys[$j-1];
                    $keys[$j-1] = $keys[$j];
                    $keys[$j] = $tmp;
                    $j--;
                }
           }
           
//If $value is an array.
        if(is_array($value)){
            var_dump($arr);
            recursive($value);
        }
    }
}
recursive($people);


?> 

     $var = $people[$key[$i]];
            var_dump($var);
            
            for($j=1; $j <= $i; $j++){
            
                
               if($people[$key[$j-1]] > $people[$key[$j]]){
                   $temp = $people[$key[$j-1]];
                   $people[$key[$j-1]] = $people[$key[$j]];
                   $people[$key[$j]] = $temp;
               }
            }             
        }        

         