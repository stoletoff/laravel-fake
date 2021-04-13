<?php

namespace App;

abstract class Animal
{
    public string $color;
    public int $legCount;
    public bool $hasTail;

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function setLegCount(int $legCount)
    {
        $this->legCount = $legCount;
    }

    public function setHasTail(bool $hasTail)
    {
        $this->hasTail = $hasTail;
    }
}