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

## References :books:

- Theunissen, R., 2016. Efficient data structures for PHP 7. [online] Medium. Available at: <https://medium.com/@rtheunissen/efficient-data-structures-for-php-7-9dda7af674cd> [Accessed 3 May 2021].
- Owens, T., 2021. Does PHP have built-in data structures?. [online] Stack Overflow. Available at: <https://stackoverflow.com/questions/22401/does-php-have-built-in-data-structures> [Accessed 3 May 2021].
