<?php
/* 

class abstraction 
  1- can't be instantiated from 
  2- made for other class to inherite from.
  3 - can have pro & methods
  4 - can have abstracted methods and non-abstracted methods
  5 - abstract funtion can't have a body but can have a parameter.

  the diff. between abstracted and not abstracted function is:
    the abstracted one you have to use it.
    the not abstracted you don't have to use it, for example if you didn't call sayHello it won't print.


    - benefits of abstract calss:
      - force developer to follow your rules


 */

 abstract class MakeDevice {

    abstract public function sayBye();
    abstract public function sayTest();
    abstract public function sayWelcome($n);



 }

 class Iphone extends MakeDevice {
    public $owner;

    public function sayBye() {
        // implement the function

    }
    public function sayTest() {
        // implement the function


    }
    public function sayWelcome($n) {
        $this->owner = $n;
        echo "Welcome $n";


    }

 }

$iphone = new Iphone();
$iphone->sayWelcome("lotfy");
echo '<pre>';
print_r($iphone);
echo '</pre>';

