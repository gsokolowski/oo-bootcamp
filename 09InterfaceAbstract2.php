<?php

//https://laracasts.com/series/object-oriented-bootcamp-in-php/episodes/9?autoplay=true

/**
 *
 * Interface and Abstract together
 *
 * Login fuction doesn't care what Provider it is. Github or facebook and thats cool
 *
 *
 */

interface ProviderNew {
    public function getAuthorizationUrl();
}

abstract class AbstractProvider {
     public function related() {

         // some logic goes here for all other child classes
    }
}

class FacebookProvider implements ProviderNew {

    public function getAuthorizationUrl() {

        return 'something';
    }
}