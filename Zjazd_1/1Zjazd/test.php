<?php
$array = [1, 20, 4, ];
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
?>