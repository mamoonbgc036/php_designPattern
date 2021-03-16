<?php
class test{
    private $_name;
    private $_age;

    public function __construct($name, $age){
        $this->_name = $name;
        $this->_age = $age;
    }

    public static function show($name, $age){
        $x = new test($name, $age);
        return $x;
    }
}

print_r(getenv("PATH"));