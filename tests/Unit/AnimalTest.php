<?php

namespace Tests\Unit;

use App\Cat;
use PHPUnit\Framework\TestCase;

class AnimalTest extends TestCase
{
    /** @test */
    public function it_can_set_color()
    {
        $animal = new Cat;
        $animal->setColor('red');

        $this->assertEquals('red', $animal->color);
    }

    /** @test */
    public function it_can_set_leg_acount()
    {
        $animal = new Cat;
        $animal->setLegCount(10);

        $this->assertEquals(10, $animal->legCount);
    }

    /** @test */
    public function it_can_set_tails()
    {
        $animal = new Cat;
        $animal->setHasTail(true);

        $this->assertEquals(true, $animal->hasTail);
    }
}
