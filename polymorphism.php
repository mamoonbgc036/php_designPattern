<?php
/*polymorphic principle says that methods in various classes that do similar things should have a similar name.here it is implemented by calculateArea method */
interface Machine{
	public function calculateArea();
}

class Circle implements Machine{
	private $_radius;

	public function __construct($radius){
		$this->_radius = $radius;
	}

	public function calculateArea(){
		return $this->_radius*$this->_radius*pi();
	}
}

class Rectangle implements Machine{
	private $_width, $_height;

	public function __construct($width, $height){
		$this->_width = $width;
		$this->_height = $height;
	}

	public function calculateArea(){
		return $this->_width*$this->_height;
	}
}

$x = new Circle(3);
echo $x->calculateArea();
$y = new Rectangle(5,6);
echo $y->calculateArea();