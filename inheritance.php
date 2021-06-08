<?php
 class Test{
 	protected $_name, $_age;

 	public function __construct($name,$age){
 		$this->_name = $name;
 		$this->_age = $age;
 	}

 	protected function getName(){
 		return $this->_name;
 	}
 }

 class Inherited extends Test{
 	private $_sex;

 	public function __construct($name,$age,$sex){
 		parent::__construct($name,$age);
 		$this->_sex = $sex;
 	}

 	public function getSex(){
 		return $this->_sex;
 	}

 	public function getAge(){
 		return $this->_age;
 	}
 }

 $x = new Inherited('noman',22,'male');
 echo $x->getName();
 echo $x->getAge();