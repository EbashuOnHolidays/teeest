<?php

class Palindrome
{
    /**
     * @param string $word
     * @return bool
     */
    public static function isPalindrome(string $word): bool
    {
        $word = mb_strtolower($word);

        return $word == strrev($word);
    }
}

echo Palindrome::isPalindrome('Deleveled') ? 'yes' : 'no';
