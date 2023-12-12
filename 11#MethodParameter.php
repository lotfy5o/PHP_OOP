<?php
// Training Method Parameters




class Apple {
    public $ram = '2GB';
    public $inch;
    public $storage;
    public $color;

    // Methods
    public function ChangeSpec($r, $in, $stor, $col){
        $this->ram = $r;
        $this->inch = $in;
        $this->storage = $stor;
        $this->color = $col;
    }

}

$iphone6Plus = new Apple();

$iphone6Plus->ChangeSpec("3GB", "6 inch", "256 GB", "Blue");





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
