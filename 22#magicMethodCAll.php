<?php

/* 
Magic Methods
   Call:
   - called when invoking function not accessible or not found
   - accept two parameters [$methodName, $params]
*/

class Iphone {
    public $name;
    public $ram;

    public function welcomeToApp($na, $ra) {
        $this->name = $na;
        $this->ram = $ra;

        echo 'Welcome ' . $na . 'Your Phone has ' . $ra . 'Ram<br>';

    }

    public function __call($method, $params) {
        echo 'The [' . $method . '] Method Not Found or Accessible<br>';
        print_r($params);
    }


}

$phone = new Iphone();

$phone->welcomeToAp("Lotfy", "2GB");


echo '<pre>';
print_r($phone);
echo '<pre>';