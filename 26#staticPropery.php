<?php
/* 

   static keyword

   - static property/method accessed in a global scope
   - declaring them as static make them accessible without needing to create object first.
   - cuz u don't have to create an object... the (this) operator isn't allowed
   - when u declare a property (not a method) as static and u made an object of the class
     u can't access those properties.
   - 




*/


class Iphone {
    public $name;
    public static $name2 = 'lotfy<br>';
    public $ram;

    public function sayHello() {
        return 'Hello';
    }

    public static function sayWelcome() {
        return 'welcome';
    }


}

// echo Iphone::$name; // error not static data member

// name2 is static data member
echo Iphone::$name2;

// echo Iphone::sayHello(); // error the function is static and u call it unstatically

// echo Iphone::sayWelcome();

$phone = new Iphone();
// $phone->name2; // error cuz u delt with name2 as not-static

echo $phone->sayWelcome(); // u have to write echo cuz the func. returns not print.

