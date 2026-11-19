<?php

declare(strict_types=1);

namespace Easy\Stacks\MinStack;

use PHPUnit\Framework\TestCase;
use Easy\Stacks\MinStack\Solution;

class SolutionTest extends TestCase
{
    private Solution $minStack;

    protected function setUp(): void
    {
        $this->minStack = new Solution();
    }

    public function test_example_from_description(): void
    {
        $this->minStack->push(-2);
        $this->minStack->push(0);
        $this->minStack->push(-3);

        $this->assertSame(-3, $this->minStack->getMin());

        $this->minStack->pop();

        $this->assertSame(0, $this->minStack->top());
        $this->assertSame(-2, $this->minStack->getMin());
    }
}