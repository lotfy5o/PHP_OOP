<?php

// inheritance final keyword
// if you add the word final before the function you can't override this function.



// super class or base class
class Apple {
    // properties
    public $ram = '2GB';
    public $inch;
    public $storage;
    public $color;
    public $screen = "LCD";
    public $name;
    

    // Methods
    public function ChangeSpec($r, $in, $stor, $col){
        $this->ram = $r;
        $this->inch = $in;
        $this->storage = $stor;
        $this->color = $col;
    }

    final public function sayHello($n){
        $this->name = $n;
        echo "Welcome $n";
    }

    

}

// subclass or derived class
class Sony extends Apple {
    // properties
    public $camera = "34 MP";

    // this method is different from the one in the base class
    // if the one in the base was deleted, this one won't be affected.
    public function sayHello($n){
        $this->name = $n;
        echo "Welcome $n";
    }

}

$iphone6Plus = new Apple();

$iphone6Plus->ChangeSpec("3GB", "6 inch", "256 GB", "Blue");

$iphone6Plus->sayHello("iphone");

// this line means I made a propery outside of any class named price
// meaning that if I created an object from the apple class the property price won't exist.
$iphone6Plus->price = "400$";

echo "<pre>";
print_r($iphone6Plus);
echo "</pre>";

$sony = new Sony();

$sony->ChangeSpec("3GB", "6 inch", "256 GB", "Blue");
$sony->sayHello("sony");

echo "<pre>";
print_r($sony);
echo "</pre>";





