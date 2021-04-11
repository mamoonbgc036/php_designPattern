<?php
	
 	class First_Class{
 		public $var1 = "ABDULLAH AL MAMOON";

 		public function getValue(){
 			return $this->var1;
 		}
 	}

 	class Second_Class{
 		public $var2 = "";

 		function __construct(First_Class $class1){
 			$this->var2 = $class1->var1;
 		}
 	}

 	$class1 = new First_Class();
 	$class2 = new Second_Class($class1);

 	// echo $class2->var2;

 	var_dump($class1);
?>