<?php

namespace exo;

class Point
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function distanceFromXtoY($referencePoint)
    {
        $distanceX = $referencePoint->x - $this->x;
        $distanceY = $referencePoint->y - $this->y;
        return sqrt(pow($distanceX, 2) + pow($distanceY, 2));
    }

    public function __toString()
    {
        return "($this->x, $this->y)";
    }
}
