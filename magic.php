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

class Example {
    private $data = [];

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }

    public function __get($name) {
        if (!array_key_exists($name, $this->data)) {
            return null;
        }

        return $this->data[$name];
    }

    public function __isset($name) {
        return isset($this->data[$name]);
    }

    public function __unset($name) {
        unset($this->data[$name]);
    }
}

$example = new Example();

// Stores 'a' in the $data array with value 15
$example->a = 15;

// Retrieves array key 'a' from the $data array
echo $example->a; // prints 15

// Attempt to retrieve non-existent key from the array returns null
echo $example->b; // prints nothing

// If __isset('a') returns true, then call __unset('a')
if (isset($example->a)) {
    unset($example->a));
}
