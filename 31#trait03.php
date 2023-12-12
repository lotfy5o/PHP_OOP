<?php


trait MyFeature1 {
    public function feature() {
        echo "This feature number one<br>";
    }
}
trait MyFeature2 {
    public function feature() {
        echo "This feature number two<br>";
    }
}

class Iphone {
    use MyFeature1, MyFeature2 {
        MyFeature2::feature as lotfy2;


        // trait name :: method name insteadof other method name
        MyFeature1::feature insteadOf MyFeature2;
    }
}

$iphone2 = new Iphone();
// when ever I print feature() it will print the MyFeature1
$iphone2->feature();

// in order to print MyFeature2 while using the insteadof :
// we gona use alias [line 17]
$iphone2->lotfy2();
echo '<pre>'; print_r($iphone2); echo '</pre>';





