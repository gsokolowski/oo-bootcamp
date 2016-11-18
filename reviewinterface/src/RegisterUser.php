<?php

namespace Greg;

class RegisterUser {

    public function execute(array $data, RespondsToUserRegistration $listener) { // $listener is this passed $this from AuthController
        var_dump('Registering the user');

        $listener->userRegisteredSuccessfully();
    }
}