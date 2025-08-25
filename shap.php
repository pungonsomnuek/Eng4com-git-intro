<?php
abstract class Shape{
    abstract public function cal_area();

}

class Circle extends Shape{
    public $radius;
    public function __construct($r){
        $this->radius = $r;
       } 
       public function cal_area(){
        $area = 22 / 7 * $this->radius * $this->radius;
        echo "วงกลมรัศมี $this->radius มีพื้นที่ $area <br>";

    }
}
    
class Ractangle extends Shape{
    public $width;
    public $length;
    public function __construct($w,$l) {
        $this->width = $w;
        $this->length = $l;
    }
    public function cal_area(){
        $area = $this->width * $this->length;
        echo "สี่เหลี่ยม $this->width ยาว $this->length มีพื้นที่ $area <br>";
  }
}
class Triangle extends Shape{
    public $base;
    public $height;
    public function __construct($b,$h){
        $this->base = $b;
        $this->height = $h;
}
public function cal_area(){
   $area = 1/2 * $this->base * $this->height;
   echo "สามเหลี่ยม ฐาน $this->base สูง $this->height มีพื้นที่ $area <br>";
}
    
    }

$shape5 = new Triangle(7,10);
$shape5->cal_area();
$shape6 = new Triangle(12,20);
$shape6->cal_area();
$shape3 = new Ractangle(7,10);
$shape3->cal_area();
$shape4 = new Ractangle(12,20);
$shape4->cal_area();

$shape1 = new Circle(7);
$shape1->cal_area();
$shape2 = new Circle(10);
$shape2->cal_area();
?>