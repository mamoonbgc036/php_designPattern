<?php

class single{
    public static $name = "mamoon";
    private static $sex;
    private $age;

    public function __construct(){
        
    }

    public static function setSex($s){
        self::$sex = $s;
        return $this;
    }

    public function getSex(){
        echo self::$sex;
    }
}

// $x = new single();
// $x->setSex(24)->getSex();

single::setSex(24)->getSex();