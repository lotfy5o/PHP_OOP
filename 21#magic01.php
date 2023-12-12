<?php
/* 
   Magic Method
   -starts with (double underscore)

   Construct
   -called when object is created
   -can be inherited
   - parameterized construct... you can pass
   the parameter throw this line:
   $phone = new Iphone("the parameter");





*/

class Iphone {
    public $name;
    public $ram;

    // public function sayHello($n) {
    //     $this->name = $n;
    //     echo 'Hello ' . $n;
    // }

    public function __construct($na, $ra) {
        // echo 'Object is created<br>';
        $this->name = $na;
        $this->ram = $ra;
        echo 'Hello ' . $na. 'Your device has ' .$ra. 'Ram' .'<br>';
    }


}

class Sony extends Iphone {

}

$phone = new Iphone("Lotfy", "8GB");
$sony = new Sony(" Sony Lotfy", "2GB");
// $phone->sayHello("Lotfy");

echo '<pre>'; print_r($phone); echo '</pre>';

