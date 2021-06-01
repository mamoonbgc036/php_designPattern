<?php

 class test{
    private $name = "mamoon";

    // public function setName($na){
    //     $this->name = $na;
    // }

    public function getName(){
        echo $this->name;
    }

    // public function name(){
    //     $this->getName();
    // }
 }

 $x = new test();

 //$x->setName('boyshort');

 echo $x->getName();