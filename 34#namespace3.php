<?php

require "34#apple.php";
require "33#sony.php";
require "33#LG.php";

// I made a namespace for every realm
// but I can't access any of them

// namespace\class


$iphone = new Apple\Hardware\Phones\CreatePhone();
$iphone->sayHello(); // used the sayHello() from Sony

print_r($iphone);


$tablet = new Apple\Hardware\Tablets\CreateTablet();
$tablet->sayHello(); // used the sayHello() from Sony

print_r($tablet);