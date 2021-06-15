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

 echo $age["Peter"];
$y = json_encode($age);
$a = json_decode($y);
//var_dump($a->Ben);


