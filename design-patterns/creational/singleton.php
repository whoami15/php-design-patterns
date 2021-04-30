<?php

// It restricts the instantiation of a class to one "single" instance
// It can save resources
// It is mostly used when recurring tasks in a program routine have to be completed. 

// Singleton has almost the same pros and cons as global variables.
// A lot of developers consider the Singleton pattern an antipattern.

class Singleton
{
    private static $theInstance = null;

    public static function getInstance()
    {
        if (self::$theInstance === null) {
            self::$theInstance = new self();
        }
        return self::$theInstance;
    }

    private function __construct()
    {
        // code..
    }
}
