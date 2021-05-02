# Design patterns

Design patterns are typical solutions to commonly occurring problems in software design.

While an algorithm always defines a clear set of actions that can achieve some goal, a pattern is a more high-level description of a solution. 

## History

There is not a exact history, when a solution gets repeated in various projects, someone eventually puts a name to it and describes the solution in detail.

## Classification of patterns.

The most basic and low-level patterns are often called __idioms__. They usually apply only to a single programming language.

The most universal and high-level patterns are __architectural patterns__.

## Behavioral

Behavioral patterns take care of effective communication and the assignment of responsibilities between objects.

### Chain of Responsibility

It allows passing request along the chain of potential handlers until one of them handles request. One of the most famous examples is HTTP Request Middleware described in PSR-15.

### Command

It converts requests or simple operations into objects.

### Iterator

Iterator is a behavioral design pattern that lets you traverse elements of a collection without exposing its underlying representation (list, stack, tree, etc.).

### Observer

It is used to notify the rest of the system about certain events in certain place.

### State

It allows an object to change the behavior when its internal state changes.

### Strategy

It is used to separate strategies and to enable fast switching between them.

### Template Method

It allows you to defines a skeleton of an algorithm in a base class and let subclasses override the steps without changing the overall algorithm’s structure.

## Creational

Creational patterns provide object creation mechanisms that increase flexibility and reuse of existing code.

### Abstract Factory

It solves the problem of creating entire product families without specifying their concrete classes.

### Builder

It allows constructing complex objects step by step.

### Factory

It is used when you need to build (not create) an object and use it many times as necessary.

### Prototype

Prototype is a creational design pattern that lets you copy existing objects without making your code dependent on their classes.

### Singleton

It ensures that only one object of its kind exists and provides a single point of access to it for any other code.

## Structural

Structural patterns explain how to assemble objects and classes into larger structures, while keeping the structures flexible and efficient.

### Adapter

It is used to translate one interface for a class into a compatible interface. For example create a adapter as interface with generic functions to get data (find and findAll), then create a class with these functions and get the data as each one works.

### Bridge

It divides business logic or huge class into separate class hierarchies that can be developed independently.

### Composite

To treat a group of objects the same way as a single instance of the object.

### Decorator

It is used when you want to adjust the behavior of an object at run-time, and with that, reduce redundant inheritances and the number of classes.

#### Difference between Bridge and Decorator pattern

The Decorator should match the interface of the object and the implementation can just provide additional behaviour.

The Bridge has no such constraint. The interface can be different from the underlying component providing the implementation, and thus it bridges between the client's interface, and the actual implementation.

#### Difference between Proxy and Decorator pattern

 A decorator adds one or more responsibilities to an object, whereas a proxy controls access to an object. Proxy is like a black box while Decorator is a white box.

- Decorator informs and empowers your customer.
- Proxy restricts and disempowers your client.

### Facade

Facade is a structural design pattern that provides a simplified (but limited) interface to a complex system of classes, library or framework.

### Proxy

It provides an object that acts as a substitute for a real service object used by a client. A proxy receives client requests, does some work (access control, caching, etc.) and then passes the request to a service object.

## References :books:

- Vorobiov, Igor, 2018. The 5 Most Common Design Patterns in PHP Applications. [online] Medium. Available at: <https://medium.com/@ivorobioff/the-5-most-common-design-patterns-in-php-applications-7f33b6b7d8d6> [Accessed 26 April 2021].
- Designpatternsphp.readthedocs.io. 2011. DesignPatternsPHP — DesignPatternsPHP 1.0 documentation. [online] Available at: <https://designpatternsphp.readthedocs.io/en/latest/README.html> [Accessed 26 April 2021].
- Refactoring.guru. 2014. Design Patterns. [online] Available at: <https://refactoring.guru/design-patterns/> [Accessed 28 April 2021].
- Pattern, D., Durairaj, L., Marins, J. and tella, r., 2018. Difference between Bridge and Decorator pattern. [online] Stack Overflow. Available at: <https://stackoverflow.com/questions/48355238/difference-between-bridge-and-decorator-pattern> [Accessed 2 May 2021].
- Pattern, D., Rzeszotarski, Ł. and Tripathi, R., 2014. Differences between Proxy and Decorator Pattern. [online] Stack Overflow. Available at: <https://stackoverflow.com/questions/18618779/differences-between-proxy-and-decorator-pattern> [Accessed 2 May 2021].