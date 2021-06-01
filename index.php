<?php

class single{
    protected static $_instance;
    private static $_name;
    private static $_age;

    public function __construct($name,$age){
        self::$_name = $name;
        self::$_age = $age;
    }

    public static function getInstance($name, $age){
        if(!self::$_instance){
            self::$_instance = new single($name,$age);
        }
        return self::$_instance;
    }

    public function getName(){
        return self::$_name;
    }
}

echo single::getInstance('mamoon',24)->getName();