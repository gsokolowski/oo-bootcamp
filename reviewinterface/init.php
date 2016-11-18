<?php

use Greg\RegisterUser;
use Greg\AuthController;


$registration = new RegisterUser();
$authController = new AuthController($registration);

$authController->register();