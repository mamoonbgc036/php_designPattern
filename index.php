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

 $ob = new Test();

 class TestOne{
    public $obj;

    public function __construct($y,$arr){
        echo $y->averageCount($arr);
    }
 }

 new TestOne($ob,[1,2,3,4,5,6,7]);