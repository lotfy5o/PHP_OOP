<?php

/* 

   Trait = allow multiple inheritance

   - supporting class not replacing class.
   - can have methods
   - can't instantiate
   - can't extends or implements
   - have priorty over class


*/

trait fingerPrint {
    public function fingerFunction() {
        echo "this is finger print feature<br>";
    }
}
trait threeDim {
    public function threeFunction() {
        echo "this is three dim. touch<br>";
    }
}
trait faceDet {
    public function faceFunction() {
        echo "this is finger print feature<br>";
    }
}

class Iphone {
    use fingerPrint;
    use threeDim;
    use faceDet;

  
}
class Sony {
    use faceDet;
    public function sayHello() {
        echo "Hello from Sony<br>";
    }

  
}
class Nokia {
    function sayHello() {
        echo "hello from Nokia<br>";
    }

  
}



$iphone = new Iphone();
$iphone->fingerFunction();
$iphone->threeFunction();
$iphone->faceFunction();
echo '<pre>'; print_r($iphone); echo '</pre>';

$sony = new Sony();
$sony->faceFunction();
$sony->sayHello();
echo '<pre>'; print_r($sony); echo '</pre>';

$nokia = new Nokia();
$nokia->sayHello();
echo '<pre>'; print_r($nokia); echo '</pre>';




