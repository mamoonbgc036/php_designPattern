<?php
class product{
    protected $item = "";
    protected $size = "";
   
    public function setItem($item){
        $this->item = $item;
    }

    public function setSize($size){
        $this->size = $size;
    }
}

class buildProduct{
    protected $product = null;
    protected $config = [];

    public function __construct($config){
        $this->product = new product();
        $this->config = $config;
    }

    public function build(){
        $this->product->setItem($this->config['item']);
        $this->product->setSize($this->config['item']);
    }

    public function getProduct(){
        return $this->product;
    }
}

$y = array('item'=>'boxer','size'=>'xl');
$x = new buildProduct($y);
$x->build($y);
var_dump($x->getProduct());

