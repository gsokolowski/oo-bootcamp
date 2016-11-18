<?php

namespace Greg;

interface RespondsToUserRegistration {
    public function userRegisteredSuccessfully();
    public function userRegisteredFailed();
}