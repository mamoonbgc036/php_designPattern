<?php
class CD{
    public $tracks;

    public function __construct(){
        $this->tracks = array();
    }

    public function addTrack($trck){
        echo __METHOD__;
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

var_dump($_SERVER);die();

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

<?php

class Book {
    private $author;
    private $title;
    function __construct($title_in, $author_in) {
        $this->author = $author_in;
        $this->title  = $title_in;
    }
    function getAuthor() {
        return $this->author;
    }
    function getTitle() {
        return $this->title;
    }
    function getAuthorAndTitle() {
      return $this->getTitle().' by '.$this->getAuthor();
    }
}

class BookTitleDecorator {
    protected $book;
    protected $title;
    public function __construct(Book $book_in) {
        $this->book = $book_in;
        $this->resetTitle();
    }   
    //doing this so original object is not altered
    function resetTitle() {
        $this->title = $this->book->getTitle();
    }
    function showTitle() {
        return $this->title;
    }
}

class BookTitleExclaimDecorator extends BookTitleDecorator {
    private $btd;
    public function __construct(BookTitleDecorator $btd_in) {
        $this->btd = $btd_in;
    }
    function exclaimTitle() {
        $this->btd->title = "!" . $this->btd->title . "!";
    }
}

class BookTitleStarDecorator extends BookTitleDecorator {
    private $btd;
    public function __construct(BookTitleDecorator $btd_in) {
        $this->btd = $btd_in;
    }
    function starTitle() {
        $this->btd->title = Str_replace(" ","*",$this->btd->title);
    }
}

  writeln('BEGIN TESTING DECORATOR PATTERN');
  writeln('');

  $patternBook = new Book('Gamma, Helm, Johnson, and Vlissides', 'Design Patterns');
 
  $decorator = new BookTitleDecorator($patternBook);
  $starDecorator = new BookTitleStarDecorator($decorator);
  $exclaimDecorator = new BookTitleExclaimDecorator($decorator);
 
  writeln('showing title : ');
  writeln($decorator->showTitle());
  writeln('');
 
  writeln('showing title after two exclaims added : ');
  $exclaimDecorator->exclaimTitle();
  $exclaimDecorator->exclaimTitle();
  writeln($decorator->showTitle());
  writeln('');
 
  writeln('showing title after star added : ');
  $starDecorator->starTitle();
  writeln($decorator->showTitle());
  writeln('');
 
  writeln('showing title after reset: ');
  writeln($decorator->resetTitle());
  writeln($decorator->showTitle());
  writeln('');

  writeln('END TESTING DECORATOR PATTERN');

  function writeln($line_in) {
    echo $line_in."<br/>";
  }
