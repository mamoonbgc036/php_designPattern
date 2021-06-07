<?php
 function averageCount($x){
    $sum = 0;
    $len = count($x);
    for ($i=0; $i < $len ; $i++) { 
        $sum+=$x[$i];
    }
    return $sum/$len;
 }

 echo averageCount([1,2,3,4]);