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


 */

 abstract class MakeDevice {
    public $ram;
    public function sayHello(){}
    // the abstract function can't have a body
    abstract public function sayBye()



 }

 class AppleDevice extends MakeDevice {
   public function sayBye(){
      echo "bye";
   }

 }

$iphone6plus = new AppleDevice();
echo '<pre>';
print_r($iphone6plus);
echo '</pre>';

