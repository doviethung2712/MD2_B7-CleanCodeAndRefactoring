<?php

use PHPUnit\Framework\TestCase;
include_once '..\B2-TachBien\FizzBuzz.php';
class FizzBuzzTest extends  TestCase
{

    public function checkNumber()
    {
        $test = new FizzBuzz();
        $number = 15;
        $result = $test->fizzBuzz($number);
        $expect = "FizzBuzz";
        $this->assertEquals($result,$expect);
    }
}