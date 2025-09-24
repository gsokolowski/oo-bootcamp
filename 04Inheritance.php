<?php

/**
 * Inheritance -------
 *
 *
 */


abstract class Shape {

    private $color;

    public function __construct($color = 'red') {
        // red by defalt on constructor
        return $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }

    // but you can override it using setColor()
    public function setColor($color) {
        $this->color = $color;
    }

    // abstract method in abstract class refers to :
    // template method design pattern

    abstract protected function getArea(); // no body no logic - subclass needs to provide it

}

class Square extends Shape {

    protected $lenght = 4;

    public function getArea() {

        return pow($this->lenght, 2);
    }
}



class Triangle extends Shape {

    protected $base = 4;
    protected $height = 5;

    // when  you need to override method getArea() from Parent Adstract Shape base class
    //  which was calculating only for square - just override it

    public function getArea() {

        return 0.5 * $this->base * $this->height;
    }

}


class Circle extends Shape {

    protected $radius = 7;

        // when  you need to override method getArea() from Parent Adstract Shape base class
    //  which was calculating only for square - just override it
    public function getArea() {

        return pi() * pow($this->radius, 2);
    }

}


// if Shape is an abstract class you can not instantiate it
// $square = new Shape(); // error

$square = new Square('red');
echo $square->getArea().'<br />';
echo $square->getColor().'<br />';


$triangle = new Triangle();
$triangle->setColor('blue'); // overriding construdtor colour to blue
echo $triangle->getArea().'<br />';
echo $triangle->getColor().'<br />';


$circle = new Circle();
$circle->setColor('yellow');
echo $circle->getArea().'<br />';
echo $circle->getColor().'<br />';


echo 'square default color is still :'.$square->getColor().'<br />';

