<?php

// It restricts the instantiation of a class to one "single" instance
// It can save resources
// It is mostly used when recurring tasks in a program routine have to be completed. 

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
