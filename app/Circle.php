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
        // todo
        return false;
    }

    public function intersects(Circle $circle): bool
    {
        // todo
        return false;
    }

    public function toArray()
    {
        return [$this->center->toArray(), $this->radius];
    }
}
