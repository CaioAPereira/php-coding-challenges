<?php

namespace Easy\Stacks\ValidParentheses;

final class Solution {

    public function isValid(string $str): bool
    {
        /** Using a key-value map to integrate with the Stack. */
        /** Following the LIFO (Last In, First Out) principle, the last character pushed onto the stack */
       /** will be the first one popped to match its closing pair. */
        $map = [
            ')' => '(',
            ']' => '[',
            '}' => '{',
        ];

        $stack = [];

        $length = strlen($str);
        for ($i = 0; $i < $length; $i++) {
            $char = $str[$i]; // Access the char in $i position
            
            /** If character is a key in the map, it's a closing bracket. */
            if (isset($map[$char])) {

                /** Popping the top element from the stack. */
                $topElement = array_pop($stack);

                /** If it doesn't match the corresponding opening bracket, the sequence is invalid then return false */
                if ($map[$char] !== $topElement) {
                    return false;
                }
            } else {
                /** If it's not a closing bracket, it's an opening one. So push it onto the stack. */
                $stack[] = $char;
            }
        }

        /** Returns true if stack is empty. */
        return empty($stack);
        
    }

}

?>