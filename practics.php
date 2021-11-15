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
