<?php
 
 class Test{
    public $name,$age;

    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }
 }

 class TestOne extends Test{
    public function getName(){
        return $this->name;
    }
 }

 $x = new TestOne('noman',24);
 echo $x->getName();
