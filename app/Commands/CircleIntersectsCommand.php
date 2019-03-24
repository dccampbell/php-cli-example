<?php

namespace App\Commands;

use LaravelZero\Framework\Commands\Command;

class CircleIntersectsCommand extends Command
{
    protected $signature = 'circle:intersects
                            {circle : Circle - [CenterPoint,Radius] (ex. "[[3,2],5]")} 
                            {circle2 : Circle - [CenterPoint,Radius] (ex. "[[3,2],5]")} ';

    protected $description = 'Given two circles, prints true if the circle edges intersect.';

    public function handle(): void
    {
        $this->info('// TODO');
    }
}
