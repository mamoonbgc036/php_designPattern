<?php

$data = file_get_contents('http://official-joke-api.appspot.com/random_joke');
echo gettype($data);



