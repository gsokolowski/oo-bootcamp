<?php

/**
 * Messages is a core component of OO Design
 *
 *
 */

// Person works for some business
class Person {

    protected $name;

    public function __construct($name){

        $this->name = $name;
    }

}

// Business hires a Person
// Business depends on staff - in business has to be at least one person do force in construct a Stuff object
class Business {

    protected $staff;
    public function __construct(Staff $staff) { // passing Staff through constructor

        $this->staff = $staff;
    }

    public function hire(Person $person) { // add Person to the staff collection

        $this->staff->add($person); // $this->staff is a collection
    }

    public function getStaffMembers() {

        return $this->staff->getMembers();
    }
}

// Person joins the Staff of the business
class Staff {
    protected $members = []; // is will be an array of Person objects

    public function __construct($members = []){
        $this->members = $members;
    }

    public function add(Person $person) {
        $this->members[] = $person; // adding Person object to and array
    }

    public function getMembers() {
        return $this->members;
    }

}






// we have a person
$person = new Person('Jeffrey Way');

echo '<pre>';
var_dump($person);
echo '</pre>';


// we have a staff and adding person object into Staff array propert called member through constructor
$staff = new Staff( [$person] );
echo '<pre>';
var_dump($staff);
echo '</pre>';


// finally we have a business and we add staff object into businnes class staff collection
$business = new Business($staff); 

// Business is going to hire new guy Greg
$person = new Person('Greg Sokolowski');
$business->hire($person);

echo '<pre>';
var_dump($business);
echo '</pre>';

// lets hire sommone else
$business->hire(new Person('Jane Doe'));

echo '<pre>';
var_dump($business);
echo '</pre>';


// How to get all members of that busness?
echo '<pre>';
var_dump($business->getStaffMembers());
echo '<pre/>';


echo '<pre>';
var_dump($staff);
echo '<pre/>';

die();


