<?php
/*here how the average is calculated is abstract from the user. User only responsibility is to give an array, the average will be return by the class. this is abstration principle of oop.*/
  class Average{
  	private $_aver;

  	public function __construct($x){
  		$sum = 0;
  		$len = sizeof($x);
  		for ($i=0; $i < $len; $i++) { 
  			$sum+=$x[$i];
  			$this->_aver = $sum/$len;
  		}
  	}

  	public function getAverage(){
  		return $this->_aver;
  	}
  }

  $x = new Average([1,2,3,4]);
  echo $x->getAverage();