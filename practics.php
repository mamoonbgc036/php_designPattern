<?php
 
 $x = "BLUE";

 switch ($x) {
 	case 'RED':
 		echo "your favourite color is ".$x;
 		break;

 	case 'BLUE':
 		echo "your favourite color is ".$x;
 		break;
 	
 	default:
 		echo "Your favourite color is neither red nor blue";
 		break;
 }

 $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

$y = json_encode($age);
echo gettype($y);