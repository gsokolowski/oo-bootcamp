<?php

/**
 * Encapsulation ------
 *
 * Propery access (public or private)
 * Restrict access to public property age by making it private
 *
 */

class Person {
    private $name;
    private $age;
    //public $age;

    public function __construct($name) {
        $this->name = $name;
    }

    public function setAge($age) {

        try{            
            if($age < 18) {
                throw new Exception('Person too young');
            }
            $this->age = $age;
        } catch (Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
    }

    public function getAge() {
        return $this->age;
    }
}

$john = new Person('John Doe');
$john->setAge(30);
$john->getAge();

// because age is public you can set it directly without using setAge() and check on age will not be done
// $john->age = 5;
// property $age needs to be private to not allow others to set prohibited values (age less then 18)
// private $age

echo '<pre>';
var_dump($john);
echo '</pre>';
