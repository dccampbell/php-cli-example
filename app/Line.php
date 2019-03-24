<?php

namespace App;

class Line extends Geometry
{
    /** @var Point $a */
    public $a;

    /** @var Point $b */
    public $b;

    public function __construct(Point $a, Point $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function intersects(Line $line): bool
    {
        // todo
        return false;
    }

    public function toArray()
    {
        return [$this->a->toArray(), $this->b->toArray()];
    }
}
