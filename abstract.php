<?php

abstract class Test{
	public $_name;
	public function __construct($name){
		$this->_name = $name;
	}

	abstract public function intro();
}

class firstTest extends Test{
	public function intro(){
		return $this->_name;
	}
}

$x = new firstTest('mamoon');
echo $x->intro();