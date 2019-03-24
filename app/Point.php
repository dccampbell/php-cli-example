<?php

namespace App;

class Point extends Geometry
{
    /** @var float $x */
    public $x;

    /** @var float $y */
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function toArray()
    {
        return [$this->x, $this->y];
    }
}
