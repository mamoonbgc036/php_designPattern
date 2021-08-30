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

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>test</p>
	<p>show</p>
	<button id="test">click</button>
	<script type="text/javascript">
		const x = document.getElementById("test");
		x.addEventListener("click",function(){
			alert("ok");
		})
	</script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h4 id="ran">0</h4>
	<button id="test">Increase</button>
	<button id="show">Decrease</button>
	<script type="text/javascript">
		const x = document.querySelector("#test");
		const y = document.querySelector("#show");
		x.addEventListener("click",function(){
			let val = document.getElementById("ran").innerHTML;
			val++;
			document.getElementById("ran").innerHTML = val;
		})

		y.addEventListener("click",function(){
			let val = document.getElementById("ran").innerHTML;

			if(val>0){
				val--;
				document.getElementById("ran").innerHTML = val;
			}
		})
	</script>
</body>
</html>
function arraysSum(array ...$arrays)
{
    return array_map(function(array $array) {
        return array_sum($array);
    }, $arrays);
}

print_r(arraysSum([1,2,3], [4,5,6], [7,8,9]));
class Dog{
	public function sound(){
		echo "gawoo";
	}
}

class Cat{
	public function sound(){
		echo "maaaawo";
	}
}
