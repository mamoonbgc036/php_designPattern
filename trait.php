<?php
 class test{
     public $_name;
     public function setName($name){
         return $this->_name = $name;
     }

 }

 trait test2{
     private $_age;

     public function setAge($y){
         return $this->_age = $y;
     }
     public function cop(){
         return 'i am coping'.$this->_age;
     }
 }

 class test1 extends test{
     use test2;
     public function getName(){
        return $this->_name;
     }
 }

 $x = new test1();
 $x->setName('mamoon');
 echo $x->getName();
 $x->setAge(25);
 echo $x->cop();
?>