<?php
abstract class Shape{
    abstract public function calculateArea();
}
class Circle extends Shape{
    public $radius;
    public function __construct($radius){
        $this->radius = $radius;
    }
    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape{
    private $width;
    private $height;
    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea(){
        return $this->width * $this->height;
    }
}

// function printArea(Shape $shape){
//     echo "Area: " . $shape->calculateArea(). "<br>";
// }
$circle = new Circle(5);
$rectangle = new Rectangle(4,6);
echo "Area of Circle: " . $circle->calculateArea() . "<br>";
echo "Area of Rectangle: " . $rectangle->calculateArea() . "<br>";

// printArea($circle);
// printArea($rectangle);
?>