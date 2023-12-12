<?php

/* 

Magic Methods

$copy = clone $main; => this called shallow copy

but when I do that and there is a data member 
that is an object from another class, it will cause problems that is:
  -the interlink between the two class will exist






*/

class Iphone {
    public $name;

    public $email;

    public function __construct($n, $e) {
        $this->name = $n;
        $this->email = $e;
 
    }

    public function __clone(){
        $this->name = clone $this->name;
    } // this function will be called when the line:
    // cloneCopy = clone $main; is initiated.
}

$main = new Iphone("lotfy", "lotfymoh1@gmail.com");
$copy = $main; // copy by reference

$cloneCopy = clone $main; // clone of $main 
$cloneCopy->name = "Lotfy";


$main->name = 'Sayed';
$copy->name = "Mariam";


echo '<pre>';print_r($main);echo '</pre>';