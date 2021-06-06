<?php
 
 function largestSwap($num) {
    $x = str_split($num);
    $y = $x[0];
    $x[0] = $x[1];
    $x[1] = $y;
    $newOne = $x[0].$x[1];
    if ($num<$newOne) {
        echo true;
    }else{
        echo false;
    }
}

largestSwap(43);