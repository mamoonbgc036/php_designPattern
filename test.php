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

//create function with an exception
function checkNum($number) {
  if($number>1) {
    throw new Exception("Value must be 1 or below");
  }
  return true;
}

//trigger exception in a "try" block
try {
  checkNum(2);
  //If the exception is thrown, this text will not be shown
  echo 'If you see this, the number is 1 or below';
}

//catch exception
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}

function isHuman($s){
	if($s=="animal"){
		throw new Exception("You are not Human");
	}
	return true;
}

try{
	isHuman("animal");
	echo "You are Human";
}catch(Exception $e){
	echo $e->getMessage();
}

interface Mamoon{
	public function sendMsg();
}

class sendSMS implements Mamoon{
	public function sendMsg($ms){
		$x = new SMS();
		$x->messaging($ms);
	}
}
