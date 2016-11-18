<?php


use Greg\Users\Person;
use Greg\Business;
use Greg\Staff;


// we have a person
$jeffrey = new Person('Jeffrey Way');
// we have a staff
$staff = new Staff( [$jeffrey] );
// we have a business
$laracast = new Business($staff);

$laracast->hire(new Person('Jane Doe'));

echo '<pre>';
var_dump($laracast->getStaffMembers());
echo '<pre/>';
