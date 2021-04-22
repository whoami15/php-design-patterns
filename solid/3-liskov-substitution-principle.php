<?php

// Objects of a superclass shall be replaceable with objects of its subclasses 
// without breaking the application. That requires the objects of your subclasses
// to behave in the same way as the objects of your superclass.

// If it looks like a duck, quacks like a duck, but needs batteries
// You probably have the wrong abstraction

class Father
{
}

class Son extends Father
{
    // This class should use only the Father´s functions
    // It should not alter all the behavior neither delete it. 
}

function f(Father $f)
{
    // If this function gets a Son or Father, it should not matter.
    //  
}

$son = new Son();
$a = f($son);
