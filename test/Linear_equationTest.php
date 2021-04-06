<?php

use PHPUnit\Framework\TestCase;
use timofeev\LinearEquation;
use timofeev\TimofeevExeption;

final class Linear_equationTest extends TestCase
{
    public function testLinearEquation()
    {
        $decide = new LinearEquation();

        $this->assertEquals([-0.3],
            $decide->Linear_equation(10, 3)
        );

        $this->assertEquals([-0.25],
            $decide->Linear_equation(-8, -2)
        );

        $this->expectException(TimofeevExeption::class);
        $decide->Linear_equation(0, 4);
    }
}