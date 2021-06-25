<?php
    
    namespace App;

    class Test{
        public function __construct(){
            echo "test";
        }
    }


    class Singleton{
        private static $_instance;
        private $_name;

        public static function getInstance(){
            if(!self::$_instance){
                self::$_instance = new Singleton();
            }

            return self::$_instance;
        }

        public function getName($name){
            $this->_name = $name;
        }

        public function showName(){
            return $this->_name;
        }
    }