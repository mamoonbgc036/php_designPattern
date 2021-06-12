<?php

 class Test{
 	public function __call($name, $argument){
 		echo $name;
 		print_r($argument);
 	}
 }

 $x = new Test();
 $x->mamoon('testing');