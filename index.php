<?php
class filePrinting{
    private $name;
    public function getName($name){
        $this->name = $name;
    }

    public function showName(){
        return $this->name;
    }
}

class upperCasename extends filePrinting{
    public $uppername;
   public function upperString($name){
        $this->name = $name;
        $this->uppername = strtoupper($this->$name);
        return $this->uppername;
    }
}

use namespace\test\practics;
include_once('namespace/test/practics.php');

$y = new practics();

$y->show();

$x = new upperCasename();

echo $x->upperString('mamoon');