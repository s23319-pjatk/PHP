<?php
function dot_product($a,$b) {
    $a_int = $a == array_filter($a, 'is_numeric');
    $b_int = $b == array_filter($b, 'is_numeric');
    if((!is_array($a) && !is_array($b)) && (count($a) != count($b)) && (!$a_int && !$b_int)) {
        echo "BLAD";
        return;
    }
    for ($i=0;$i<count($a);$i++) {
        $c[$i] = $a[$i] + $b[$i];
    }
    echo "Iloczyn skalarny tych tablic:" . json_encode($c);
}

dot_product([3,1,7],[6,8,2]);
?>