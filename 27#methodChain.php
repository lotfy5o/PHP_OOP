<?php

/* 

   


*/

class Iphone {
    public $name;
    public $email;

    public function pressPower() {
        echo "you have pressed the power button<br>";
        return $this;
    }
    
    public function bootPhone() {
        echo "the phone is booting now..<br>";
        return $this;
    }
    
    public function sayWelcome() {
        echo "Welcome to phone<br> ";
        return $this;
    }
}

$phone = new Iphone();
// $phone->pressPower();
// $phone->bootPhone();
// $phone->sayWelcome();

$phone->pressPower()->bootPhone()->sayWelcome();
echo '<pre>'; print_r($phone); echo '</pre>';