<?php

namespace Tests\Feature;

use Tests\TestCase;

class CircleIntersectsCommandTest extends TestCase
{
    public function testCircleIntersectsCircle(): void
    {
        $this->artisan('circle:intersects [[0,0],5] [[2,2],5]')
            ->expectsOutput('true');

        $this->artisan('circle:intersects [[-5,-5],1] [[5,5],1]')
            ->expectsOutput('false');
    }
}
