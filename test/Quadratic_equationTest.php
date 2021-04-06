<?php

use PHPUnit\Framework\TestCase;
use timofeev\QuadraticEquation;
use timofeev\TimofeevExeption;

final class Quadratic_equationTest extends TestCase {
    public function testQuadratic_equation() {
        $decide = new QuadraticEquation();

        $this->assertEquals([-2, -1],
            $decide->solve(2, 6, 4)
        );

        $this->assertEquals([-0.3],
            $decide->solve(0, 10, 3)
        );

        $this->assertEquals([-1, 1],
            $decide->solve(2, 0, -2)
        );

        $this->assertEquals([-3, 0],
            $decide->solve(2, 6, 0)
        );

        $this->expectException(TimofeevExeption::class);
        $decide->solve(0, 0, 0);

        $this->expectException(TimofeevExeption::class);
        $decide->solve(2, 1, 1);
    }
}