<?php
    interface test{
        public function get($name,$age);
        public function show();
    }

    class dummy implements test{
        private $_name,$_age;

        public function get($name,$age){
            $this->_name = $name;
            $this->_age = $age;
        }

        public function show(){
            return [$this->_name,$this->_age];
        }
    }

    $x = new dummy();

    $x->get("mamoon",32);

    var_dump($x->show());