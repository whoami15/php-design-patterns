<?php
// It is used when you want to adjust the behavior of an object at run-time, 
// and with that, reduce redundant inheritances and the number of classes.

// e.g we have two interfaces with a common function

interface OpenerInterface
{
    public function open(): void;
}
class Door implements OpenerInterface
{
    public function open(): void
    {
        // opens the door
    }
}
class Window implements OpenerInterface
{
    public function open(): void
    {
        // opens the window
    }
}

// Then we needs to add some extra functionality
// without alter the main functionality

// Instead of create or inherit a new class per each class and add the same behavior
// We create just a new class with just the interface in common

class SmartOpener implements OpenerInterface
{

    private $opener;
    public function __construct(OpenerInterface $opener)
    {
        $this->opener = $opener;
    }

    public function open(): void
    {
        $this->opener->open();
        // We add the extra functionality
        $this->temperature();
    }
}

$door = new Door();
$window = new Window();

// And so below we can add the extra functionality
$smartDoor = new SmartOpener($door);
$smartWindow = new SmartOpener($window);
