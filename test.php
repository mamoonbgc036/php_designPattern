<?php
    
    function Textlenght($item){
        return strlen($item);
    }

    $string = ['mamoon','noman','sharif'];

    $len = array_map("Textlenght", $string);

    var_dump($len);