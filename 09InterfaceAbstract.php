<?php

//https://laracasts.com/series/object-oriented-bootcamp-in-php/episodes/9?autoplay=true

/**
 *
 * Polimorfizm use Interface
 *
 * Login fuction doesn't care what Provider it is. Github or facebook and thats cool
 *
 *
 */

interface Provider {
    public function authorize();
}

function login(Provider $provider){
    $provider->authorize();
}