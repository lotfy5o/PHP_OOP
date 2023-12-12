<?php

require "32#test.php";

// the class inside the 32#test.php is called Testing()
// so if I name a new class Testing() it will give an error: u can't redclare the class
// 

class Testing {
    public $test;
}

$test = new Testing();
print_r($test);

