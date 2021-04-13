<?php

namespace Tests\Unit;

use App\Cat;
use App\Human;
use PHPUnit\Framework\TestCase;

class HumanTest extends TestCase
{
    /** @test */
    public function it_can_adopt_animal()
    {
        $animal = new Cat;

        $human = new Human;
        $human->adoptPet($animal);

        $this->assertEquals($animal, $human->pet);
    }
}
