<?php

declare(strict_types=1);

namespace Easy\Stacks\MinStack;
# 155. Min Stack

/*  **Difficulty:** Medium  
    **Topic:** Stack

## Problem Description

Design a stack that supports push, pop, top, and retrieving the minimum element in constant time.

Implement the `MinStack` class:

- `MinStack()` initializes the stack object.
- `void push(int val)` pushes the element `val` onto the stack.
- `void pop()` removes the element on the top of the stack.
- `int top()` gets the top element of the stack.
- `int getMin()` retrieves the minimum element in the stack.

You must implement a solution with `O(1)` time complexity for each function.

## Example

**Input:**
```text
["MinStack","push","push","push","getMin","pop","top","getMin"]
[[],[-2],[0],[-3],[],[],[],[]] 

**Output**
[null,null,null,null,-3,null,0,-2] */

final class Solution
{
    private array $stack;
    private array $minStack;

    public function __construct()
    {
        $this->stack = [];
        $this->minStack = [];
    }

    public function push(int $n): void
    {
        $this->stack[] = $n;

        if ($this->minStack === []) {
            $this->minStack[] = $n;
        } else {
            $currentMin = $this->minStack[count($this->minStack) - 1];
            $this->minStack[] = min($n, $currentMin);
        }
    }

    public function pop(): void
    {
        array_pop($this->stack);
        array_pop($this->minStack);
    }

    public function top(): int
    {
        return $this->stack[count($this->stack) - 1];
    }

    public function getMin(): int
    {
        return $this->minStack[count($this->minStack) - 1];
    }
}

?>