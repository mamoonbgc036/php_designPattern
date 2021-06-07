<?php
 class Test{
    public $aver;

    public function averageCount($x){
        $sum = 0;
        $len = count($x);
        for ($i=0; $i < $len ; $i++) { 
            $sum+=$x[$i];
        }
        return $this->aver = $sum/$len;
    }
 }

 class TestOne{
    public $obj;

    public function __construct($arr){
        $this->obj = new Test();
        echo $this->obj->averageCount($arr);
    }
 }

 new TestOne([1,2,3,4,5]);