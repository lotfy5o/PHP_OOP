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
        return $this;
    }
}
trait threeDim {
    public function threeFunction() {
        echo "this is three dim. touch<br>";
        return $this;

    }
}
trait faceDet {
    public function faceFunction() {
        echo "this is finger print feature<br>";
        return $this;

    }
}

trait allFeature {
    use fingerPrint, threeDim, faceDet;

}

class Iphone {
    use allFeature;
    // use fingerPrint, threeDim, faceDet;
    
  
}
class Sony {
    use faceDet;
    public function sayHello() {
        echo "Hello from Sony<br>";
        return $this;

    }

  
}
class Nokia {
    function sayHello() {
        echo "hello from Nokia<br>";
        return $this;

    }

  
}



$iphone = new Iphone();
// if u use the chaining method u have to use=> return $this in the function;
$iphone->fingerFunction()->threeFunction()->faceFunction();
// $iphone->threeFunction();
// $iphone->faceFunction();
echo '<pre>'; print_r($iphone); echo '</pre>';

$sony = new Sony();
$sony->faceFunction()->sayHello();
// $sony->sayHello();
echo '<pre>'; print_r($sony); echo '</pre>';

$nokia = new Nokia();
$nokia->sayHello();
echo '<pre>'; print_r($nokia); echo '</pre>';

// priortiy
trait MyFeature {
    public function sayHello() {
        echo "hello from trait<br>";
    }
}

class AppleDevice {
    public function sayHello() {
        echo "hello from class<br>";
    }
}

class Iphone2 extends AppleDevice {
    use MyFeature;
    
}

$iphone2 = new Iphone2();
$iphone2->sayHello();
echo '<pre>'; print_r($iphone2); echo '</pre>';





