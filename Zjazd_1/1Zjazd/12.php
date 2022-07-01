<?php
function trans(){
    $arr = [
        [6, 2],
        [95, 89],
        [100, 10],
        [11, 90]
    ];
    foreach ($arr as $el){
        foreach ($el as $i) {
            echo $i . "&nbsp";
        }
        echo"<br>";
    }
    echo"<br>";

    for ($i = 0; $i < count($arr[0]); $i++){
        for ($j = 0; $j < count($arr); $j++){
            echo $arr[$j][$i] . "&nbsp;";
        }
    echo"<br>";
    }
}
trans();
?>