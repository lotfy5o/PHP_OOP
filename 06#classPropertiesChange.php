<?php

class Apple {
    public $ram = '2GB';
    public $inch;
    public $storage;
    public $color;

}

$iphone6Plus = new Apple();
$iphone6Plus ->ram = '2GB';
$iphone6Plus->inch = '5 inch';
$iphone6Plus->storage = '32GB';
$iphone6Plus->color = 'Gold';



echo "<pre>";
var_dump($iphone6Plus);
echo "</pre>";




$iphone7Plus = new Apple();
$iphone7Plus->ram = '4GB';
$iphone7Plus->inch = '5.5 inch';
$iphone7Plus->storage = '256GB';
$iphone7Plus->color = 'Silver';

echo "<pre>";
var_dump($iphone7Plus);
echo "</pre>";

$iphone = new Apple();
echo "<pre>";
var_dump($iphone);
echo "</pre>";
