<?php

	class Test{
		public static $name, $age;

		public function __construct($name){
			$this->_name = $name;
		}

		public static function setAge($age){
			self::$age;
		}

		public function __destruct(){
			echo $this->_name;
		}

		public function getAge(){
			return $this->_age;
		}
	}

	Test::setAge(24);