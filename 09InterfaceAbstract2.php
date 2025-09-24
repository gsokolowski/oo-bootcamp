<?php

//https://laracasts.com/series/object-oriented-bootcamp-in-php/episodes/9?autoplay=true

/**
 *
 * Interface and Abstract together
 *
 * Interface. implement from it
 * Abstract Class. extend from it 
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

        echo 'something FacebookProvider';
    }
}

class GithubProvider extends AbstractProvider {
    public function related() {
        echo 'something GithubProvider';
    }
}

$git = new GithubProvider();
$git->related();

$fb = new FacebookProvider();
$fb->getAuthorizationUrl();