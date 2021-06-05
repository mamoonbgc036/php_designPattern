<?php

$data = file_get_contents('http://official-joke-api.appspot.com/jokes/ten');
$mdata = json_decode($data);
var_dump($mdata[0]->setup);



