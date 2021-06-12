<?php

 class Test{
 	public function __call($name, $argument){
 		echo $name;
 		print_r($argument);
 	}

 	public static function __callStatic($name, $argument){
 		echo $name;
 		echo implode(';', $argument);
 	}
 }

 $x = new Test();
 $x->mamoon([12,24]);
 Test::noman(12,24,45);

class kids
{

	public function __set($property, $value)
	{
		if ($value > 30)
		{
			$this->property= $value;
		}
	}

	public function __get($property)
	{
		return "The child's height is " . $this->property . " inches tall";
	}

}

$kid1= new kids;

$kid1->height= 45;

echo $kid1->height;
var_dump($kid1);
