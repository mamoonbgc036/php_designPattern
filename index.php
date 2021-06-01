<?php

 class test{
    private $name;

    public function setName($na){
        $this->name = $na;
    }

    private function getName(){
        echo $this->name;
    }

    public function name(){
        $this->getName();
    }
 }

 $x = new test();

 $x->setName('boyshort');

 $x->name();