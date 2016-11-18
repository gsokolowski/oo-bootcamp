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
    public function __construct(Staff $staff) {

        $this->staff = $staff;
    }

    public function hire(Person $person) {

        // add person to the staff collection
        $this->staff->add($person);
    }

    public function getStaffMembers() {

        return $this->staff->getMembers();
    }
}


// Person joins the Staff
class Staff {
    protected $members = [];

    public function __construct($members = []){
        $this->members = $members;

    }

    public function add(Person $person) {
        $this->members[] = $person;
    }

    public function getMembers() {
        return $this->members;
    }

}

// we have a person
$jeffrey = new Person('Jeffrey Way');
// we have a staff
$staff = new Staff( [$jeffrey] );
// we have a business
$laracast = new Business($staff);

// Business is going to hire jeffrey
// $laracast->hire($jeffrey);

// lets hire sommone else
$laracast->hire(new Person('Jane Doe'));

echo '<pre>';
var_dump($laracast->getStaffMembers());
echo '<pre/>';

echo '<pre>';
//var_dump($staff);
echo '<pre/>';




