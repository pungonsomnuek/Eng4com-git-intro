<?php
abstract class Car{
    public $model;
    public function __construct($m){
        $this->model = $m;
    }
    abstract public function intro();
}

class Volvo extends Car{
   public function intro(){
      echo "I am Volvo, model $this->model <br>";
    }
}

class Honda extends Car{
    public function intro(){
      echo "I am Love Honda, model $this->model <br>";
    }
}

$car1 = new Volvo("X13");
$car1->intro(); 
$car2 = new Honda("Accord");
$car2->intro(); 
?>