<?php
$array = array(4, 1, 9, 8, 5, 2, 10);



function checkSort($array)
{
    $cnt = count($array);
    
    if (!$length = $cnt) {
        return true;
    }
    
    for ($i = 0; $i < $length; $i++) {
        if (isset($array[$i+1])) {
            if ($array[$i]>$array[$i+1]) {
                return false;
            }
        }
    }
 return true;
}
?>