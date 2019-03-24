<?php

namespace App\Commands;

class CircleIntersectsCommand extends AbstractCommand
{
    protected $signature = 'circle:intersects 
                            {circle : [CenterPoint,Radius] - Example: [[3,2],5]} 
                            {circle2 : [CenterPoint,Radius] - Example: [[3,2],5]}';

    protected $description = 'Given two circles, prints true if the circle edges intersect.';

    public function handle(): void
    {
        $circle = $this->parseCircle($this->argument('circle'));
        $circle2 = $this->parseCircle($this->argument('circle2'));

        if ($circle->intersects($circle2)) {
            $this->line('true');
        } else {
            $this->line('false');
        }
    }
}
