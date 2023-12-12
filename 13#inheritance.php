<?php

// inheritance




class Apple {
    public $ram = '2GB';
    public $inch;
    public $storage;
    public $color;
    public $screen = "LCD";
    

    // Methods
    public function ChangeSpec($r, $in, $stor, $col){
        $this->ram = $r;
        $this->inch = $in;
        $this->storage = $stor;
        $this->color = $col;
    }

    

}
class Sony extends Apple {
    
    public $camera = "34 MP";


}

$iphone6Plus = new Apple();

$iphone6Plus->ChangeSpec("3GB", "6 inch", "256 GB", "Blue");

echo "<pre>";
print_r($iphone6Plus);
echo "</pre>";

$sony = new Sony();

$sony->ChangeSpec("3GB", "6 inch", "256 GB", "Blue");

echo "<pre>";
print_r($sony);
echo "</pre>";





