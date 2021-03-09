<?php
class single{
    private $_instance;
    private $_name;
    private $_age;

    public function __construct($name,$age){
        $this->_instance = new single();
    }

    public static function getInstance(){
        if(!$this->_instance){
            $this->_instance = new single();
        }
        return $this;
    }

    public function getName(){
        return $this->_name;
    }
}

single::getInstance()