<?php

function arrayToString($arr) {
    $answer = "";
    $counter = 0;
    $length = count($arr);
    while($counter < $length){
        $item = $arr[$counter];
        $answer = $answer.$item;
        $counter++;
    }
    return $answer;
}

echo arrayToString([1,2,3]);