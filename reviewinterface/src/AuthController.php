<?php

namespace Greg;
//https://laracasts.com/series/object-oriented-bootcamp-in-php/episodes/10

/**
 * AuthController class is responsible for receiving http requests
 * you need to have a class dedicated to process of registering users
 * doing it in controller is not a good idea
 * class RegisterUserService*
 *
 * Sending back massages to controller
 */




class AuthController implements RespondsToUserRegistration {

    public $registration;

    public function __construct(RegisterUser $registration){
        $this->registration = $registration;
    }

    public function register() {
        $this->registration->execute(['Greg', 'Sokolowski'], $this); // <--- pass current object as listener - just send '$this'
    }

    public function userRegisteredSuccessfully() {

        var_dump('Create successfuly, redirect forward');
    }

    public function userRegisteredFailed() {

        var_dump('Create unsuccessfuly, redirect back');
    }
}


