<?php
 trait test{
     private $_name;
     public function setName($name){
         $this->_name = $name;
         return $this;
     }
 }

 trait test2{
     private $_age;

     public function setAge($y){
         return $this->_age = $y;
     }
     public function cop(){
         return 'i am coping '.$this->_age;
     }
 }

 class test1{
      use test2;
      use test;
     public function getName(){
        return $this->_name;
     }
 }

 $x = new test1();
 echo $x->setName('mamoon')->getName();
// echo $x->getName();
//  $x->setAge(25);
//  echo $x->cop();
?>