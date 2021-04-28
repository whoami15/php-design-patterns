<?php

// Facade is a structural design pattern that provides a simplified (but limited) interface to
// a complex system of classes, library or framework.

class Facade
{
    protected $subsystem1;
    protected $subsystem2;

    public function __construct(
        Subsystem1 $subsystem1 = null,
        Subsystem2 $subsystem2 = null
    ) {
        // You can add many subsystem as you need, if it does not exist, it is created.
        $this->subsystem1 = $subsystem1 ?: new Subsystem1();
        $this->subsystem2 = $subsystem2 ?: new Subsystem2();
        // Facade also manage the subsystems lifecycle.
        // All of this shields the client from the undesired complexity of the subsystem.
    }

    public function operation(): string
    {
        $result = "Facade initializes subsystems:\n";
        $result .= $this->subsystem1->operation1();
        $result .= $this->subsystem2->operation1();
        $result .= "Facade orders subsystems to perform the action:\n";
        $result .= $this->subsystem1->operationN();
        $result .= $this->subsystem2->operationZ();

        return $result;
    }
}

class Subsystem1
{
    public function operation1(): string
    {
        return "Subsystem1: Ready!\n";
    }

    public function operationN(): string
    {
        return "Subsystem1: Go!\n";
    }
}

class Subsystem2
{
    public function operation1(): string
    {
        return "Subsystem2: Get ready!\n";
    }

    public function operationZ(): string
    {
        return "Subsystem2: Fire!\n";
    }
}

function clientCode(Facade $facade)
{
    // So, the client just run what he needs with just one function
    echo $facade->operation();
}

/**
 * The client code may have some of the subsystem's objects already created. In
 * this case, it might be worthwhile to initialize the Facade with these objects
 * instead of letting the Facade create new instances.
 */

$subsystem1 = new Subsystem1();
$subsystem2 = new Subsystem2();
$facade = new Facade($subsystem1, $subsystem2);
clientCode($facade);
