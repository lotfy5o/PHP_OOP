<?php

// function inside a class == methode
// function outside a class == function



class AppleDevice {
    // properties
    public $ram = '2GB';
    public $inch = '5 inch';
    public $storage = '16GB';
    public $color = 'Silver';

    // Methods
    public function doubleHome(){
        echo "you have pressed the home button twice.";
    }

}

$iphone6Plus = new AppleDevice();
$iphone6Plus ->ram = '2GB';
$iphone6Plus->inch = '5 inch';
$iphone6Plus->storage = '32GB';
$iphone6Plus->color = 'Gold';

// when I called this function, it will be printed before the next var_dump
$iphone6Plus -> doubleHome();


echo "<pre>";
var_dump($iphone6Plus);
echo "</pre>";




$iphone7Plus = new AppleDevice();
$iphone7Plus->ram = '4GB';
$iphone7Plus->inch = '5.5 inch';
$iphone7Plus->storage = '256GB';
$iphone7Plus->color = 'Silver';

echo "<pre>";
var_dump($iphone7Plus);
echo "</pre>";

$iphone = new AppleDevice();
echo "<pre>";
var_dump($iphone);
echo "</pre>";
