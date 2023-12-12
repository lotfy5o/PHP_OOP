<?php

/* 
Magic Methods
   Get:
   - called when getting a property not accessible or not founcd
   - accetp one parameter [$prop]

   Set:
   -called when setting value to property not accessible or not found
   - accept two parameters [$prop, $value]
*/

class Iphone {
    public $name;
    public $ram;
    private $coloring;

    // public function __get($prop) {
    //     echo "the property [" . $prop . "] is not found or accessible<br>";
    
    // }
    
    public function __set($prop, $val) {
        echo "the property [" . $prop . "] is not found or accessible<br>";
        echo "and you can not assign this value [" . $val . "] to it<br>";
        
    }

   

}

$phone = new Iphone();
// $phone->color;
$phone->coloring = "red";





echo '<pre>';
print_r($phone);
echo '<pre>';