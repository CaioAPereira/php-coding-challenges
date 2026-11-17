<?php

namespace Easy\Stacks\ValidParentheses;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    private Solution $solution;

    protected function setUp(): void
    {
        $this->solution = new Solution();
    }

    public function testValidSimpleParentheses(): void
    {
        $this->assertTrue($this->solution->isValid("()"));
    }

    public function testValidMultipleBrackets(): void
    {
        $this->assertTrue($this->solution->isValid("()[]{}"));
    }

    public function testInvalidBrackets(): void
    {
        $this->assertFalse($this->solution->isValid("(]"));
    }
    
    public function testValidNestedBrackets(): void
    {
        $this->assertTrue($this->solution->isValid("([])"));
    }

    public function testInvalidOrder(): void
    {
        $this->assertFalse($this->solution->isValid("([)]"));
    }

}
?>