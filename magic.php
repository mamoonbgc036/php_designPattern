<?php

 // class Test{
 // 	public function __call($name, $argument){
 // 		echo $name;
 // 		print_r($argument);
 // 	}

 // 	public static function __callStatic($name, $argument){
 // 		echo $name;
 // 		echo implode(';', $argument);
 // 	}
 // }

 // $x = new Test();
 // $x->mamoon([12,24]);
 // Test::noman(12,24,45);

// class setGet{
// 	public function __set($property,$value){
// 		return $this->property = $value;
// 	}

// 	public function __get($property){
// 		echo $this->property;
// 	}
// }

// $x = new setGet();

// $x->name = "noman";
// $x->name;

class Person
{
    public $sex;
    private $name;
    private $age;

    public function __construct($name="",  $age=25, $sex='Male')
    {
        $this->name = $name;
        $this->age  = $age;
        $this->sex  = $sex;
    }

    /**
     * @param $content
     *
     * @return bool
     */
    public function __isset($content) {
        echo "The {$content} property is private，the __isset() method is called automatically.<br>";
        echo  isset($this->$content);
    }
}

$person = new Person("John", 25); // Initially assigned.
echo isset($person->sex),"<br>";
echo isset($person->name),"<br>";
echo isset($person->age),"<br>";
