<?php

// It allows an object to change the behavior when its internal state changes.

// The pattern extracts state-related behaviors into separate state classes and forces the original
// object to delegate the work to an instance of these classes, instead of acting on its own.

class Context
{
    private $state;

    public function __construct(State $state)
    {
        $this->transitionTo($state);
    }

    /**
     * The Context allows changing the State object at runtime.
     */
    public function transitionTo(State $state): void
    {
        echo "Context: Transition to " . get_class($state) . ".\n";
        $this->state = $state;
        $this->state->setContext($this);
    }

    /**
     * The Context delegates part of its behavior to the current State object.
     */
    public function request1(): void
    {
        $this->state->handle1();
    }

    public function request2(): void
    {
        $this->state->handle2();
    }
}

/**
 * The base State class declares methods that all Concrete State should
 * implement and also provides a backreference to the Context object, associated
 * with the State. This backreference can be used by States to transition the
 * Context to another State.
 */
abstract class State
{
    protected $context;

    public function setContext(Context $context)
    {
        $this->context = $context;
    }

    abstract public function handle1(): void;

    abstract public function handle2(): void;
}

/**
 * Concrete States implement various behaviors, associated with a state of the
 * Context.
 */
class ConcreteStateA extends State
{
    public function handle1(): void
    {
        echo "ConcreteStateA handles request1.\n";
        echo "ConcreteStateA wants to change the state of the context.\n";
        $this->context->transitionTo(new ConcreteStateB());
    }

    public function handle2(): void
    {
        echo "ConcreteStateA handles request2.\n";
    }
}

class ConcreteStateB extends State
{
    public function handle1(): void
    {
        echo "ConcreteStateB handles request1.\n";
    }

    public function handle2(): void
    {
        echo "ConcreteStateB handles request2.\n";
        echo "ConcreteStateB wants to change the state of the context.\n";
        $this->context->transitionTo(new ConcreteStateA());
    }
}

$context = new Context(new ConcreteStateA());
$context->request1();
$context->request2();
