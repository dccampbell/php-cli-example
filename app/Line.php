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

    /** Calculates if the given point exists on the line. */
    public function contains(Point $point): bool
    {
        return  $point->x <= max($this->a->x, $this->b->x) && $point->x >= min($this->a->x, $this->b->x) &&
                $point->y <= max($this->a->y, $this->b->y) && $point->y >= min($this->a->y, $this->b->y);
    }

    /** Calculates if the given line segment intersects with this line. */
    public function intersects(Line $line): bool
    {
        if ($this->orientation($line->a) != $this->orientation($line->b) &&
            $line->orientation($this->a) != $line->orientation($this->b)) {
            return true;
        }
        return  $this->contains($line->a) ||
                $this->contains($line->b) ||
                $line->contains($this->a) ||
                $line->contains($this->b);
    }

    /** Checks the orientation (colinear/clockwise/counterclock) of a point compared to the line. */
    public function orientation(Point $point): bool
    {
        $val =  ($point->y - $this->a->y) * ($this->b->x - $point->x) -
                ($point->x - $this->a->x) * ($this->b->y - $point->y);
        if ($val == 0) {
            return 'colinear';
        }
        return $val > 0 ? 'clockwise' : 'counterclockwise';
    }

    public function toArray()
    {
        return [$this->a->toArray(), $this->b->toArray()];
    }
}
