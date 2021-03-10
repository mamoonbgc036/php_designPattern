<?php
class single{
    protected static $_instance;
    private $_name;
    private $_age;

    public function __construct($name,$age){
        self::$_name = $name;
        self::$_age = $age;
    }

    public static function getInstance(){
        if(!self::$_instance){
            self::$_instance = new single();
        }
        return self::$_instance;
    }

    public function getName(){
        return $this->_name;
    }
}

single::getInstance('mamoon',24);