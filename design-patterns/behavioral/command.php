<?php

// Here an object is used to encapsulate all information needed to perform an action
//  or trigger an event at a later time.

interface CommandInterface
{
    public function execute();
    // execute must be done from different entry points
}

class SimpleCommand implements CommandInterface
{
    private $payload;

    public function __construct(string $payload)
    {
        $this->payload = $payload;
    }

    public function execute()
    {
        echo "SimpleCommand: See, I can do simple things like printing (" . $this->payload . ")\n";
    }
}
