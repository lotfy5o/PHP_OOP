<?php
// Encapcelation
// TV example: the Tv is the encapcelation and the remote is the way to change the channels
// u encapcelate data and give a way to access it




class Apple {
    public $ram = '2GB';
    public $inch;
    public $storage;
    public $color;
    public $lock;

    // Methods
    public function ChangeSpec($r, $in, $stor, $col){
        $this->ram = $r;
        $this->inch = $in;
        $this->storage = $stor;
        $this->color = $col;
    }

    public function ChangePass($pass){
        $this->lock = sha1($pass);
    }

}

$iphone6Plus = new Apple();

$iphone6Plus->ChangeSpec("3GB", "6 inch", "256 GB", "Blue");
$iphone6Plus->ChangePass("ahmed");





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
