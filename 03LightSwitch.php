<?php

/**
 * Encapsulation ------
 *
 * Encapsulation is aking methods and properies not available to public by making them (private or protected)
 * and giwing to public only methods which are needed
 * method on()
 * method off()
 * Encapsulation is to restrict access to some methods and properties
 * method connect and activate should be used only for the need off class not by outside user
 * not through object
 *
 * In Base (Parent) class
 * protected means that I can still access this methods from extended class (subclas)
 * private - subclass is not able to access this properties and obwiosly user either
 *
 */

class LightSwitch {

    private $connected = false;
    private $activated = false;

    public function on() {

        $this->activate(true);
        $this->connect(true);
    }

    public function off() {
        $this->activate(false);
        $this->connect(false);
    }

    private function connect($conState) {

        $this->connected = $conState;

    }

    private function activate($actState) {

        $this->activated = $actState;
    }
}

$switch = new LightSwitch();

// user should use only two methods
$switch->on();
$switch->off();

var_dump($switch);

// user shouldn't be able to call so you need to make this methods private for class use only !!!
//$switch->connect(true);
//$switch->activate(false);

var_dump($switch);