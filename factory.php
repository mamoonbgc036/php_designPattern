<?php
class Product{
    private $_name;
    private $_category;

    public function __construct($name, $cat){
        $this->_name = $name;
        $this->_category = $cat;
    }

    public function getProduct(){
        return $this->_name." is belongs to ".$this->_category;
    }
}

class productFactory{
    public static function make($name, $cat){
        return new Product($name, $cat);
    }
}
$x = productFactory::make('cat','animal');

print_r($x->getProduct());