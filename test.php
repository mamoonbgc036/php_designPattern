<?php
    
    $string = ['mamoon','noman','sharif'];

    $len = array_map("Textlenght", $string);

    var_dump($len);

    function Textlenght($item){
        return strlen($item);
    }
