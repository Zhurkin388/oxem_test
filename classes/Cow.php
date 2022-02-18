<?php

namespace App;

use App\abstract\Animals;

/**
 * Класс Коровы
 */

class Cow extends Animals
{
    public string $getName;
    public string $getProductName;

    public function __construct($count)
    {
        $this::$registrationNumber++;

        $this->countAnimal = $count;

        $this->getName = 'Коров';
        $this->getProductName = 'л. молока';
    }

    public function getProduct(): int
    {
        return rand(8, 12);
    }
}
