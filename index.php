<?php

function makeTest($a, $b){
    return $a==10 || $b==10 || $a+$b == 10 ? 'Found' : 'Not Found';
}

echo makeTest(8,5);

