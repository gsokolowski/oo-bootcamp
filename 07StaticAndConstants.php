<?php

/**
 * Static method or property
 * You are not working on instance of class
 * And you have access from anywhere, its like global function but in OO world
 *
 * Most of the time the statics are not the right choice - use dynamic
 *
 * Static is good for smal opperations that never change like db connection
 *
 *
 */

class Math {

    public static function sumNumbers(...$number) {

        return array_sum($number);
    }
}

$sum = Math::sumNumbers(1,2,3,4,5,6);
echo $sum;
echo '<br />';


/**
 *
 * Static use for somethinge that never change
 * e.g like tax = 0.9
 *
 */

class Bank {
    public static $tax = .9;

}

echo Bank::$tax = 1.5; // and you have changed it so make it private
echo '<br />';

class Bank2 {
    private static $tax = .9;

}

//Bank2::$tax = 1.5; //no you can't change here but you could change it from inside this class
echo '<br />';

// use CONSTANTS
class Bank3 {
    const TAX = .9;

}

echo Bank3::TAX; // no its constant - nobody can change it