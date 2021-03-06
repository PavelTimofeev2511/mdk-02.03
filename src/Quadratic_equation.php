<?php

namespace timofeev;

use core\EquationInterface;

class QuadraticEquation extends LinearEquation implements EquationInterface
{
    public $d;

    public function solve (float $a,float $b,float $c): array
    {
        if ($a == 0) {
            return $this->Linear_equation($b, $c);
        }

        $this->d = $this->Discriminant($a, $b, $c);
        if ($this->d == 0) {
            return $this->x = [(-1 * $b + sqrt($this->d)) / (2 * $a)];
        }
        if ($this->d < 0) {
            $error = 'Уравнение не имеет решения';
            throw new TimofeevExeption($error);
        }

        return $this->x = [(-1 * $b - sqrt($this->d)) / (2 * $a), (-1 * $b + sqrt($this->d)) / (2 * $a)];


    }

    protected function Discriminant($a, $b, $c)
    {
        return ($b * $b) - (4 * $a * $c);
    }


}