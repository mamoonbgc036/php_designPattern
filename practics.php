<?php
 
   class billCalculation{
   	private static $instance;
   	public $price;
   	public $person;
   	public $totalBill;


   	public static function getInstance(){
   		self::$instance = new billCalculation();
   		return self::$instance;
   	}

   	public function setPrice($price){
   		$this->price = $price;
   		return $this;
   	}

   	public function setPerson($person){
   		$this->person = $person;
   		return $this;
   	}

   	public function calculateBill(){
   		$this->totalBill = $this->price*$this->person;
   		return $this->totalBill;
   	}
   }

   echo billCalculation::getInstance()->setPrice(26)->setPerson(5)->calculateBill();


//get information about url
  $url = "https://www.w3resource.com/php-exercises/php-basic-exercise-8.php";
  $url = parse_url($url);
  
  echo $url['scheme'];
  echo $url['host'];
  echo $url['path'];
  //determin whether https or http

  if(!empty($_SERVER['HTTPS'])){
      echo "https";
  } else{
    echo "http";
  }

  // to redirect user to a different page

  header("Location: https://prothomalo.com/");

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <form method="POST">
    <input type="text" name="name">
    <input type="submit" name="">
  </form>
</body>
</html>

<?php

 if (isset($_POST['name'])) {
   echo $_POST['name'];
 }

echo date('h:i:s').'<br>';
  sleep(5);
  echo date('h:i:s');

//convert string to number
echo convertWord('zero,one,two,three,four,five,six,seven,eight,nine');

function convertWord($str){
  $result = '';
  $words = explode(',', $str);
  foreach ($words as $word) {
    switch ($word) {
      case 'zero':
        $result .= '0';
        break;

      case 'one':
        $result .= '1';
        break;

      case 'two':
        $result .= '2';
        break;

      case 'three':
        $result .= '3';
        break;

      case 'four':
        $result .= '4';
        break;
      
      case 'five':
        $result .= '5';
        break;

      case 'six':
        $result .= '6';
        break;

      case 'seven':
        $result .= '7';
        break;

      case 'eight':
        $result .= '8';
        break;

      case 'nine':
        $result .= '9';
        break;

      default:
        echo "default";
        break;
    }
  }

  return $result;
}

  function removeDuplicate($list){
    $arr = array_values(array_unique($list));

    return $arr;
  }

  var_dump(removeDuplicate([1,1,2,2,3,4,5]));

 function findMatch($model, $test){
  $molen = strlen($model);
  $telen = strlen($test);

  if(substr($model, $molen-$telen, $telen)==$test){
    return true;
  }else{
    return false;
  }

 }


echo findMatch('mamoon', 'moon');

function firstNonrepeatedword($str){
    for ($i=0; $i < strlen($str) ; $i++) { 
      if (substr_count($str, substr($str, $i, 1)) == 1 ) {
        return substr($str, $i, 1);
      }
    }
  }

  echo firstNonrepeatedword('abcdea');
 function sum_of_digit($nums){
    $digitSum = 0;

    for ($i=0; $i < strlen($nums) ; $i++) { 
      $digitSum += $nums[$i];
    }

    return $digitSum;
  }

  echo sum_of_digit('12345');

 $pattern = '/fox/';
  $str = 'The quick brown fox jumps over the lazy dogs';

  if (preg_match($pattern, $str)) {
    echo $pattern. 'is present in the string';
  } else{
    echo $pattern. 'is not present in the string';
  }

//remove white space from a string

  $str = 'The quick brown fox jumps over the lazy dogs';

  echo preg_replace('/\s+/', '', $str);

 $str = 'I am @ abdullah al mamoon';

  $newStr = preg_replace('/[^A-Za-z0-9]/', ' ', $str);

  echo $newStr;

 $str = 'I am @abdullah al *mamoon036';

  $newStr = preg_replace('/[^A-Za-z,*]/', '', $str);

  echo $newStr;

class Test{
    public $mess = 'Hello, I am ';

    public function introduc($name){
      return $this->mess.$name;
    }
  }

  $x = new Test();

  echo $x->introduc('mamoon');
 //calculate factorial of a number
  class Test{
    public $factor = 1;
    public function __construct($num){
      if (!is_int($num)) {
        throw new InvalidArgumentException(''.$num.' is not a number');
      }
      $this->factorial($num);
      $this->result();
    }
    public function factorial($num){
      for ($i=1; $i <= $num ; $i++) { 
       $this->factor *= $i;
      }
      return $this->factor;
    }

    public function result(){
      echo $this->factor;
    }
  }

  new Test(7);

