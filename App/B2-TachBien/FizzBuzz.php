<?php

class FizzBuzz
{
    public function fizzBuzz($number)
    {
        $fizz = $number % 3 == 0;
        $buzz = $number % 5 == 0;
        if ($fizz && $buzz) {
            return "FizzBuzz";
        } elseif ($fizz == 0) {
            return "Fizz";
        } elseif ($buzz== 0) {
           return "Buzz";
        } else {
            return $number . "";
        }
    }
}