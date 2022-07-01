<?php
function pangram($input){
    $chars = range("a", "z");
    $sentence = strtolower(trim($input));
    $result = true;
    foreach ($chars as $char){
        if(!strstr($sentence, $char)){
            echo"False";
            return;
        }
    }
    echo "True";
}
pangram("The quick brown fox jumps over the lazy dog");
?>