<?php


// require 'classes/testing1.class.php';
// require 'classes/testing2.class.php';
// require 'classes/testing3.class.php';

// $var = new Testing1();
// $var2 = new Testing2();
// print_r($var);
// print_r($var2);


// if I have 150 classes I am not gona call them this way

// standard php library => spl_autoload_register 

spl_autoload_register(function($class) {
    require 'classes/' . $class . '.class.php';
});
$var = new Testing2();
print_r($var);