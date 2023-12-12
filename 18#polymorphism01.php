<?php
/* 
  Polymorphism
  -Have methods without body 

*/

// this class is in the php website

interface DBConnects {
    // function to get the name of the users
    // without knowing how you gona get them.
    // cuz the query for example might be different.
    public function getUsers();
    public function getArticles();
    public function showStats();
}

class MySql implements DBConnects {
    public function getUsers() {
        echo "SELECT * FROM users<br>";
    }
    public function getArticles() {
        echo "SELECT * FROM articles<br>";
        
    }
    public function showStats() {
        
        echo "SELECT * FROM states";
    }
    
}

class Oracle implements DBConnects {
    public function getUsers() {
        echo "Hello  FROM users<br>";
    }
    public function getArticles() {
        echo "Hello  FROM articles<br>";
        
    }
    public function showStats() {
        
        echo "Hello  FROM states";
    }

}

$row = new MySql();
$row->getUsers();
$row->getArticles();
$row->showStats();
echo '<pre>'; print_r($row); echo '</pre>';

$row2 = new Oracle();
$row2->getUsers();
$row2->getArticles();
$row2->showStats();
echo '<pre>'; print_r($row2); echo '</pre>';


interface Mobile {
    // this is an abstract function cuz the hole class is an interface
    public function pressHome(); 
}

class Iphone implements Mobile {
    public $name;

    public function pressHome(){
        echo "you will see opened application";

    }
}

class Sony implements Mobile {
    public $name;

    public function pressHome(){
        echo "close all apps";

    }
}

$ipnone = new Iphone();
$ipnone->pressHome();
echo '<pre>'; print_r($ipnone); echo '</pre>';

$sony = new Sony();
$sony->pressHome();
echo '<pre>'; print_r($sony); echo '</pre>';

