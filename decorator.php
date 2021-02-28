<?php
class CD{
    public $tracks;

    public function __construct(){
        $this->tracks = array();
    }

    public function addTrack($trck){
        $this->tracks = $trck;
    }

    public function getTrack(){
        $output = "";

        foreach($this->tracks as $num=>$track){
            $output .= ($num + 1) . ") {$track}.";
        }

        return $output;
    }
}

$tracksFromExternalSource = array('What It Means', 'Brr', 'Goodbye');
$myCD = new CD();
foreach ($tracksFromExternalSource as $track) {    
    $myCD-> addTrack($track);
}

class CDTrackListDecoratorCaps{
    public $cd;

    public function __construct(CD $cd){
        $this->cd = $cd;
    }

    public function makeCaps(){
        var_dump($this->cd);die();
        foreach($this->cd->tracks as $trck){
            $track = strtoupper($trck);
        }
    }
}

$myCD = new CD();
foreach ($tracksFromExternalSource as $track) 
{    
    $myCD-> addTrack($track);
}
$myCDCaps = new CDTrackListDecoratorCaps($myCD);
$myCDCaps-> makeCaps();
print "The CD contains the following tracks: " . $myCD-> getTrackList(); 