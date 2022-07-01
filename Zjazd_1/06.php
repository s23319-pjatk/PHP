<?php
$a = 7;
$b = 9;
$c = 2;

function checkTriangle($d, $e, $f) {
    if ($d + $e > $f && $d + $f > $e && $e + $f > $d){
        echo "Można zbudować trójkąt ";
    }
    else {
        echo "BLAD";
    }
}checkTriangle($a, $b, $c);
?>