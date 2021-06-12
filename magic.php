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
 Test::noman('testing');