<?php

namespace timofeev;


class LinearEquation
{
    protected $x;

    public function Linear_equation($a, $b)
    {
        if ($a == 0) {
            $error = 'Уравнение не существует';
            throw new TimofeevExeption($error);
        }
        MyLog::Instance()->log("Линейное уравнение");
        return $this->x = [(-$b) / $a];
    }
}