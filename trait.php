<?php
 trait Test{
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

 class testOne{
    use Test;
    public function getName(){
        return $this->_name;
    }
 }

 $x = new testOne('noman',24);

 echo $x->getName();
 echo $x->getAge();
