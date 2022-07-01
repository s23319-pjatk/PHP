<?php
function stars($a) {
    for ($i=1; $i<=$a; $i++){
        echo str_repeat("*", $i);
        echo("<br>");
    }

    for ($i=$a; $i>0; $i--){
        echo str_repeat('*', $i);
        echo("<br>");
    }
    for ($i=$a; $i>0; $i--){
        echo str_repeat('&nbsp;', $a - $i) . str_repeat('*', $i);
        echo("<br>");
    }
    for ($i=1; $i<=$a; $i++){
        echo str_repeat('&nbsp;', $a - $i) . str_repeat('*', $i);
        echo("<br>");
    }
}
stars(3);
?>