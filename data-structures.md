# Data Structures

The only native data structure in PHP is array. Fortunately, arrays are quite flexible and can be used as hash tables as well.

Actually PHP 7 introduces an extension called [ds](https://www.php.net/manual/en/book.ds) providing specialized data structures as an alternative to the array.

## Collection

Collection is the base interface which covers common functionality like foreach, echo, count, print_r, var_dump, serialize, json_encode, and clone.

## Sequence

Sequence describes the behaviour of values arranged in a single, linear dimension. Some languages refer to this as a List.

## Vector.

A Vector is a Sequence of values in a contiguous buffer that grows and shrinks automatically. It’s the most efficient sequential structure because a value’s index is a direct mapping to its index in the buffer, and the growth factor isn't bound to a specific multiple or exponent.

### Strengths

Very low memory usage and get, set, push and pop are O(1)

### Weaknesses

insert, remove, shift, and unshift are O(n)

## Deque

A Deque (pronounced “deck”) is a Sequence of values in a contiguous buffer that grows and shrinks automatically. The name is a common abbreviation of “double-ended queue” and is used internally by Ds\Queue.

Two pointers are used to keep track of a head and a tail. The pointers can “wrap around” the end of the buffer, which avoids the need to move other values around to make room. This makes shift and unshift very fast — something a Vector can’t compete with.

### Strengths

Low memory usage and get, set, push, pop, shift, and unshift are all O(1)

### Weaknesses

Insert, remove are O(n) and buffer capacity must be a power of 2.

## Stack

A Stack is a “last in, first out” or “LIFO” structure that only allows access to the value at the top of the structure and iterates in that order, destructively. Ds\Stack uses a Ds\Vector internally.

## Queue

A Queue is a “first in, first out” or “FIFO” structure that only allows access to the value at the front of the queue and iterates in that order, destructively. Ds\Queue uses a Ds\Deque internally.

### PriorityQueue

A PriorityQueue is very similar to a Queue. Values are pushed into the queue with an assigned priority, and the value with the highest priority will always be at the front of the queue.

## Hashable

An interface which allows objects to be used as keys. It determines an object’s hash based on its handle: this means that two objects that are considered equal by an implicit definition would not be treated as equal because they are not the same instance.

Data structures that honour the Hashable interface are Map and Set.

## Map

A Map is a sequential collection of key-value pairs, almost identical to an array when used in a similar context. Keys can be any type, but must be unique. Values are replaced if added to the map using the same key.

### Strengths

Performance and memory efficiency is almost identical to an array, automatically frees allocated memory when its size drops low enough and put, get, remove, and hasKey are O(1)

### Weaknesses

Can’t be converted to an array when objects are used as keys.

## Set

A Set is a collection of unique values. The textbook definition of a set will say that values are unordered unless an implementation specifies otherwise.

Set uses the same internal structure as a Map, which is based on the same structure as an array. This means that a Set can be sorted in O(n * log(n)) time whenever it needs to be, just like a Map and an array.

### Strengths

Add, remove, and contains are O(1), Hhnours the Hashable interface and supports any type of value (SplObjectStorage only supports objects).

### Weaknesses

Doesn’t support push, pop, insert, shift, or unshift and get is O(n) if there are deleted values before the index, O(1) otherwise.

## References :books:

- Theunissen, R., 2016. Efficient data structures for PHP 7. [online] Medium. Available at: <https://medium.com/@rtheunissen/efficient-data-structures-for-php-7-9dda7af674cd> [Accessed 3 May 2021].
- Owens, T., 2021. Does PHP have built-in data structures?. [online] Stack Overflow. Available at: <https://stackoverflow.com/questions/22401/does-php-have-built-in-data-structures> [Accessed 3 May 2021].
