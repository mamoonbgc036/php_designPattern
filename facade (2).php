<?php 

    // Imagine that you have parts of your application that have a high complexity to use. And for some reason, you cannot just refactor it, but you need to use all those many complex objects. You can easily apply the Facade Pattern to create a unified interface to mask them and make an entire flow easier to use.

    //suppose we have a class to cook rice bulkly and a class to serve customer. now management decide not to cook bulkly instead start cooking by taking order and serve fresh. so we need facade pattern to solve the problem.

   class CookRice
   {
    public function takeRice(){
        echo "taking rice".'<br>';
    }

    public function washRice(){
        echo "washing rice".'<br>';
    }

    public function cookedRice(){
        echo "cooking rice".'<br>';
    }
   }

   class Serve
   {
    public function takeOrder(){
        echo "taking order from customer".'<br>';
    }

    public function orderinKichen(){
        echo "ordering in kichen".'<br>';
    }

    public function serveOnTable(){
        echo "serving on cutomer table";
    }
   }

   class FacadeServed
   {
    private $cook;
    private $serve;

    public function __construct(){
        $this->cook = new CookRice();
        $this->serve = new Serve();
    }

    public function CookAndServe(){
        $this->serve->takeOrder();
        $this->serve->orderinKichen();
        $this->cook->takeRice();
        $this->cook->washRice();
        $this->cook->cookedRice();
        $this->serve->serveOnTable();
    }
   }

   function Serving(FacadeServed $fac = null){
    $fac->CookAndServe();
   }

   $x = new FacadeServed();

   Serving($x);