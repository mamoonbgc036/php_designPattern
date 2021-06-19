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

$dom = new DOMDocument('1.0', 'utf-8');
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
//create the main tags, without values
$books = $dom->createElement('books');
$book_1 = $dom->createElement('book');
// create some tags with values
$name_1 = $dom->createElement('name', 'PHP - An Introduction');
$price_1 = $dom->createElement('price', '$5.95');
$id_1 = $dom->createElement('id', '1');
//create and append an attribute
$attr_1 = $dom->createAttribute('version');
$attr_1->value = '1.0';
//append the attribute
$id_1->appendChild($attr_1);
//create the second tag book with different namespace
$namespace = 'www.example.com/libraryns/1.0';
//include the namespace prefix in the books tag
$books->setAttributeNS('http://www.w3.org/2000/xmlns/', 'xmlns:ns', $namespace);
$book_2 = $dom->createElementNS($namespace,'ns:book');
$name_2 = $dom->createElementNS($namespace, 'ns:name');
//create a CDATA section (that is another DOMNode instance) and put it inside the name tag
$name_cdata = $dom->createCDATASection('PHP - Advanced');
$name_2->appendChild($name_cdata);
$price_2 = $dom->createElementNS($namespace, 'ns:price', '$25.00');
$id_2 = $dom->createElementNS($namespace, 'ns:id', '2');
//create the XML structure
$books->appendChild($book_1);
$book_1->appendChild($name_1);
$book_1->appendChild($price_1);
$book_1->appendChild($id_1);
$books->appendChild($book_2);
$book_2->appendChild($name_2);
$book_2->appendChild($price_2);
$book_2->appendChild($id_2);
$dom->appendChild($books);
//saveXML() method returns the XML in a String
print_r ($dom->saveXML());






