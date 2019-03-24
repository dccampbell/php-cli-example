<?php

namespace Tests\Feature;

use Tests\TestCase;

class CircleContainsCommandTest extends TestCase
{
    public function testCircleContainsPoint(): void
    {
        $this->artisan('circle:contains [[0,0],8] [3,3]')
            ->expectsOutput('true');

        $this->artisan('circle:contains [[0,0],1] [3,3]')
            ->expectsOutput('false');
    }
}
