<?php
 class Test{
    protected $_name;
    public $_age;

    public function __construct($name,$age){
        $this->_name = $name;
        $this->_age = $age;
    }

    public function getAge(){
        return $this->_age;
    }
 }

 class testOne extends Test{
    //use Test;
    public function getName(){
        return $this->_name;
    }
 }

 $x = new testOne('noman',22);

 echo $x->getName();
 echo $x->getAge();
