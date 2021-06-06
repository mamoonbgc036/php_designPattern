<?php

function makeTest($a, $b){
    $arr = array($a,$b,$a+$b);
    if(in_array(10, $arr)){
        return 'Found';
    }else{
        return 'Not Found';
    }
}

echo makeTest(10,5);

