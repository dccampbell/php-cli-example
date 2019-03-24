<?php

namespace App\Commands;

use LaravelZero\Framework\Commands\Command;

class LineIntersectsCommand extends Command
{
    protected $signature = 'line:intersects
                            {line : A line string - [PointA,PointB] (ex. "[[1,3],[-2,4]]")} 
                            {line2 : A line string - [PointA,PointB] (ex. "[[1,3],[-2,4]]")} ';

    protected $description = 'Given two lines, prints true if the lines intersect.';

    public function handle(): void
    {
        $this->info('// TODO');
    }
}
