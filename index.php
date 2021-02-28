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

$x = new upperCasename();

echo $x->upperString('mamoon');