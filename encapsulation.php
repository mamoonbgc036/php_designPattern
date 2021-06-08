<?php
/*The wrapping up of data and methods into a single unit (called class) is known as encapsulation*/
class Student{
	private $_student;

	public function __construct($name,$age,$class){
		$this->_student['name'] = $name;
		$this->_student['age'] = $age;
		$this->_student['class'] = $class;
	}

	public function getStudent(){
		return $this->_student;
	}
}

$x = new Student('mamoon',32,14);

var_dump($x->getStudent());