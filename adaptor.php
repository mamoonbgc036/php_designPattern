<?php
class Photo{
    public $x = "mamoon";
    public $y = "noman";
    public function camaraOn(){
        echo "press button camara on"."<br>";
        return $this;
    }

    public function arrowCamara(){
        echo "arrow the camara on"."<br>";
        return $this;
    }

    public function pressTakeButton(){
        echo "press take button to take the picture"."<br>";
    }
}

class PrintImage extends Photo{
    public function printPicture(){
        echo "printing the taken picture"."<br>";
    }
}

$x = new PrintImage();

$x->camaraOn()->arrowCamara();

?>