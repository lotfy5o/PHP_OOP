<?php
/* 
Magic Method
Clone:
   typical copy of object in php works by reference
   means both (main and copied) object will be interlinked

*/

class Iphone {
    public $name;

    public $email;

    public function __construct($n, $e) {
        $this->name = $n;
        $this->email = $e;

    }
}

$main = new Iphone("lotfy", "lotfymoh1@gmail.com");
$copy = $main; // copy by reference

$cloneCopy = clone $main; // clone of $main
$cloneCopy->name = "Lotfy";


$main->name = 'Sayed';
$copy->name = "Mariam";


echo '<pre>';print_r($main);echo '</pre>';
echo '<pre>';print_r($copy);echo '</pre>';
echo '<pre>';print_r($cloneCopy);echo '</pre>';