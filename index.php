<?php

$data = file_get_contents('http://official-joke-api.appspot.com/random_joke');
$mdata = json_decode($data);
var_dump($mdata->setup);



