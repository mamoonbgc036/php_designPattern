<?php
 
   class billCalculation{
   	public static $instance;
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




