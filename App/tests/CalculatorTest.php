<?php

use PHPUnit\Framework\TestCase;

include_once '..\B1-DoiTenTachHang\Calculator.php';

class CalculatorTest extends TestCase
{

    public function testCalculatorAdd()
    {
        $test = new Calculator();
        $a = 9;
        $b = 3;
        $op = ADDITION;
        $result = $test->calculate($a, $b, $op);
        $expect = 12;
        $this->assertEquals($result, $expect);
    }

}