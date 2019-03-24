<?php

namespace App\Commands;

use LaravelZero\Framework\Commands\Command;

class CircleContainsCommand extends Command
{
    protected $signature = 'circle:contains 
                            {circle : Circle - [CenterPoint,Radius] (ex. "[[3,2],5]")} 
                            {point : Point - [X,Y] (ex. [3,2])} ';

    protected $description = 'Given a circle and point, prints true if the point is contained within the circle.';

    public function handle(): void
    {
        $this->info('// TODO');
    }
}
