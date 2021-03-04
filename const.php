<?php
 class test{
     private $_name;
     public function __construct($x){
         $this->_name = $x;
     }

     public function sayHello(){
         return "say hello ".$this->_name;
     }
 }

 $obj = new test('mamoon');
 echo $obj->sayHello();

 class test1{
     public function __call($name, $arguments){
         echo $name. ' => ' . implode(', ', $arguments);
     }
 }

 $std = new test1();
 echo $std->hello('mamoon', 'noman', 'sharif');
?>