<?php

namespace Tests\Feature;

use Tests\TestCase;

class LineIntersectsCommandTest extends TestCase
{
    public function testLineIntersectsLine(): void
    {
        $this->artisan('line:intersects [[0,0],[5,5]] [[0,5],[5,0]]')
            ->expectsOutput('true');

        $this->artisan('line:intersects [[0,0],[1,1]] [[3,3],[4,4]]')
            ->expectsOutput('false');
    }
}
