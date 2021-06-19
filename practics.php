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

$age = array("Peter"=>24,"Mamoon"=>32);
echo $age["Peter"];

$a = json_encode($age);
$y = json_decode($a);

echo $y->Mamoon;

$w = '{"nasir":42,"shawon":22}';

$z = json_decode($w);
echo $z->nasir;

$content = file_get_contents('SWOT_MY.txt');

$content = str_replace("PEOPLE", "peoples", $content);

file_put_contents("SWOT_MY.txt", $content);

$dom = new DOMDocument('1.0','utf-8');

$dom->preserveWhiteSpace = false;

$dom->formatOutput = true;

$books = $dom->createElement('books');
$books1 = $dom->createElement('book');

$books->appendChild($books1);

print_r($dom->saveXML());





