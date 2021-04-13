<?php

namespace App;

class Human
{
    public Animal $pet;

    public function adoptPet(Animal $adoptedPet)
    {
        $this->pet = $adoptedPet;
    }
}