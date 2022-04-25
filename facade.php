<?php 

	class CookedRice{
		private $_objectOne;
		private $_objectTwo;

		public function __construct(){
			$this->_objectOne = new PreBurner();
			$this->_objectTwo = new Burner();
		}

		public function MadeRice(){
			$this->_objectOne->takeRice();
			$this->_objectOne->washRice();
			$this->_objectTwo->putPot();
			$this->_objectTwo->check();
		}
	}

	class PreBurner{
		public function takeRice(){
			echo "Taking Rice".'<br>';
		}

		public function washRice(){
			echo "Washing Rice".'<br>';
		}
	}

	class Burner{
		public function putPot(){
			echo "Puting Rice Pot on Burner".'<br>';
		}

		public function check(){
			echo "Check for sadda".'<br>';
		}
	}

	function Enter(CookedRice $facade){
		$facade->MadeRice();
	}

	$x = new CookedRice();

	Enter($x);