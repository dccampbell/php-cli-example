<?php

namespace App\Commands;

class CircleContainsCommand extends AbstractCommand
{
    protected $signature = 'circle:contains 
                            {circle : [CenterPoint,Radius] - Example: [[3,2],5]} 
                            {point : [x,y] - Example: [2,4]}';

    protected $description = 'Given a circle and point, prints true if the point is contained within the circle.';

    public function handle(): void
    {
        $circle = $this->parseCircle($this->argument('circle'));
        $point = $this->parsePoint($this->argument('point'));

        if ($circle->contains($point)) {
            $this->line('true');
        } else {
            $this->line('false');
        }
    }
}
