<?php

namespace Tests\Unit;

use App\Math;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function test_it_can_sum()
    {
        $math = new Math;

        $this->assertEquals(3, $math->sum(1, 2));
        $this->assertEquals(-1, $math->sum(1, -2));
    }
}
