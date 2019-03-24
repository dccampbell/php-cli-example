<?php

namespace App;

class Circle extends Geometry
{
    /** @var Point $center */
    public $center;

    /** @var float $radius */
    public $radius;

    public function __construct(Point $center, float $radius)
    {
        $this->center = $center;
        $this->radius = $radius;
    }

    public function contains(Point $point): bool
    {
        $distSq = ($point->x - $this->center->x) ** 2 + ($point->y - $this->center->y) ** 2;
        $radSq = $this->radius ** 2;
        return $distSq <= $radSq;
    }

    public function intersects(Circle $circle): bool
    {
        $distSq = ($circle->center->x - $this->center->x) ** 2 + ($circle->center->y - $this->center->y) ** 2;
        $radSq = ($circle->radius + $this->radius) ** 2;
        return $distSq <= $radSq;
    }

    public function toArray()
    {
        return [$this->center->toArray(), $this->radius];
    }
}
