<?php

/**
 * Inheritance -------
 *
 *
 */


abstract class Shape {

    private $color;

    public function __construct($color = 'red') {

        return $this->color = $color;
    }

    public function getColor() {
        return $this->color;
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

    // when  you need to override method getArea() from Parent Shape base class
    //  which was calculating only for square - just override it

    public function getArea() {

        return 0.5 * $this->base * $this->height;
    }

}


class Circle extends Shape {

    protected $radius = 7;

    public function getArea() {

        return pi() * pow($this->radius, 2);
    }

}


// if Shape is and abstract class you can not instantiate it
// $square = new Shape(); // error

$square = new Square('red');
echo $square->getArea().'<br />';
echo $square->getColor().'<br />';



$triangle = new Triangle();
echo $triangle->getArea().'<br />';


$circle = new Circle();
echo $circle->getArea().'<br />';








