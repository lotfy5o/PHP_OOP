<?php
// Class Constant
// it doesn't change
// best practice to write the constant capital letters
// self referes to the class constant
// self the class itself, this is the object I'am creating from the class
// :: => scope resolution
// self::



class AppleDevice {
    // properties
    public $ram = '2GB';
    public $inch = '5 inch';
    public $storage = '16GB';
    public $color = 'Silver';
    public $ownerName;

    // Constant
    const CHIP = 'A9';
    const OWNERNAME = 5;

    // Methods
    // when u do var_dump for the object, it doesn't show up
    public function getSpecification(){
        echo "This iphone Ram is: " . $this->ram . "<br>";
        echo "This iphone Screen is: " . $this->inch . "<br>";
    }


    public function setOwnerName(){
        // if ownerName less than three chars
        // strlen is a function that count the chars of a string
        if (strlen($this->ownerName) < self::OWNERNAME) {

            echo 'Owner name can\'t be less than ' .self::OWNERNAME. ' chars <br>';
        }
        else {
            echo 'Your Name has been set <br>';
        }


    }
    // public function setOwnerName($owner){
    //     // if ownerName less than three chars
    //     // strlen is a function that count the chars of a string
    //     if (strlen($owner) < 3) {

    //         echo 'Owner name can\'t be less than three chars <br>';
    //     }
    //     else {
    //         echo 'Your Name has been set <br>';
    //     }


    // }
}

$iphone6Plus = new AppleDevice();
$iphone6Plus ->ram = '2GB';
$iphone6Plus->inch = '5 inch';
$iphone6Plus->storage = '32GB';
$iphone6Plus->color = 'Gold';
$iphone6Plus->ownerName = 'o';
// $iphone6Plus->setOwnerName();
$iphone6Plus->setOwnerName('Lo');

// when I called this function, it will be printed before the next var_dump

$iphone6Plus -> getSpecification(); // This iphone Ram is: 2GB
$iphone6Plus -> setOwnerName(); // This iphone Ram is: 2GB


echo "<pre>";
var_dump($iphone6Plus);
echo "</pre>";




$iphone7Plus = new AppleDevice();
$iphone7Plus->ram = '4GB';
$iphone7Plus->inch = '5.5 inch';
$iphone7Plus->storage = '256GB';
$iphone7Plus->color = 'Silver';
$iphone7Plus->ownerName = 'Lotfy';
$iphone7Plus->setOwnerName();

echo "<pre>";
var_dump($iphone7Plus);
echo "</pre>";

$iphone = new AppleDevice();
echo "<pre>";
var_dump($iphone);
echo "</pre>";
