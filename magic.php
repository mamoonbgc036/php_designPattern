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

 // $x = new Test();
 // $x->mamoon([12,24]);
 // Test::noman(12,24,45);

class setGet{
	public function __set($property,$value){
		return $this->property = $value;
	}

	public function __get($property){
		echo $this->property;
	}
}

$x = new setGet();

$x->name = "noman";
$x->name;
