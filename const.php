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
?>