<?php

use PHPUnit\Framework\TestCase;

include_once '..\B3-TachPhuongThuc\Cylinder.php';

class CylinderTest extends TestCase
{

    public function testPerimeter()
    {
        $test = new Cylinder();
        $radius = 5;
        $result = $test->getPerimeter($radius);
        $expect = 78.539816339745;
        $this->assertEquals($result,$expect);
    }
}