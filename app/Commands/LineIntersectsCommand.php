<?php

namespace App\Commands;

class LineIntersectsCommand extends AbstractCommand
{
    protected $signature = 'line:intersects
                            {line : [PointA,PointB] - Example: [[1,3],[-2,4]]} 
                            {line2 : [PointA,PointB] - Example: [[1,3],[-2,4]]}';

    protected $description = 'Given two lines, prints true if the lines intersect.';

    public function handle(): void
    {
        $line = $this->parseLine($this->argument('line'));
        $line2 = $this->parseLine($this->argument('line2'));

        if ($line->intersects($line2)) {
            $this->line('true');
        } else {
            $this->line('false');
        }
    }
}
