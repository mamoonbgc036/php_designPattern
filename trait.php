<?php
//  trait test{
//      private $_name;
//      public function setName($name){
//          $this->_name = $name;
//          return $this;
//      }
//  }

//  trait test2{
//      private $_age;

//      public function setAge($y){
//          return $this->_age = $y;
//      }
//      public function cop(){
//          return 'i am coping '.$this->_age;
//      }
//  }

//  class test1{
//       use test2;
//       use test;
//      public function getName(){
//         return $this->_name;
//      }
//  }

//  $x = new test1();
//  echo $x->setName('mamoon')->getName();
// echo $x->getName();
//  $x->setAge(25);
//  echo $x->cop();


trait test{
    private $name;

    public function setName($name){
        $this->name = $name;
        return $this;
    }
}

trait test1{
    private $age;

    public function setAge($age){
        $this->age = $age;
        return $this;
    }
}

class mamoon{
    use test;
    use test1;

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }
}

$x = new mamoon();

$nam = $x->setName('noman')->getName();

echo $nam;