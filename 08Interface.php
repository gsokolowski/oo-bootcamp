<?php
// https://laracasts.com/series/object-oriented-bootcamp-in-php/episodes/8

/**
 *
 * Interface. implement from it
 * Abstract Class. extend from it
 *
 * The roole is
 * If there is a multiple implementation for the same method in different clases then you need an Interface
 * Here you have execute() method for class LogToFile and LogToDatabase
 * Here you need and interface and you implement you business classes to Interface not to concred classes
 *
 * In Interface
 * There is no logic
 * Just name of methods to implement in child implemented classes
 * Interface will hold common methods for all data but without logic
 * logic is implemented in extension classes
 *
 */

interface Logger {
    public function execute($message);
}

class LogToFile implements Logger {

    public function execute($message) {

        var_dump('log message to file '. $message);
    }
}

class LogToDatabase implements Logger {

    public function execute($message) {

        var_dump('log message to database '. $message);
    }
}




class userController {

    public $logger;

    // dependency injection technic - so $logger is an object of LogToFile
    // implement ro interface
    public function __construct(Logger $logger) {

        $this->logger = $logger;
    }

    // implemented to concread class LogTo file
    // public function __construct(LogToFile $logger) {

    //    $this->logger = $logger;
    // }

    public function show($message) {

        // poprzez property logger from LogToFile or LogToDatabase classes I call method execute from other class
        $this->logger->execute($message);
    }
}

$message = 'Name is JoeDoe';
$userController = new userController(new LogToFile);
$userController->show($message);