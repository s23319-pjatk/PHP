<?php
$array = [1, 4, 3, 5, 9, 6, 1, 6, 4, 1, 1, 4, 5, 6, 6, 7, 2, 1, 4, 0];
$j = count($array);
$t = $j-1;
while($j>=0){
    for ($i=0; $i < $t; $i++) {
        $aux = $array[$i];
        if($array[$i]>$array[$i+1]){
            $array[$i] = $array[$i+1];
            $array[$i+1] = $aux;
        }
    }
    $j--;
}
print_r($array);