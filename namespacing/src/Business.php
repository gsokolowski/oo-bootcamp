<?php


namespace Greg;

use Greg\Users\Person;

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