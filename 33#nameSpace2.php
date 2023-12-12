<?php

require "33#apple.php";
require "33#sony.php";
require "33#LG.php";

// I made a namespace for every realm
// but I can't access any of them

// namespace\class


$iphone = new Sony\CreatePhone();
$iphone->sayHello();

print_r($iphone);