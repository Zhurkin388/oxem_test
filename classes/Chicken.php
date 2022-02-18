<?php

namespace App;

use App\abstract\Animals;

/**
 * Класс Курицы
 */

class Chicken extends Animals
{
    public string $getName;
    public string $getProductName;

    public function __construct($count)
    {
        $this::$registrationNumber++;

        $this->countAnimal = $count;

        $this->getName = 'Куриц';
        $this->getProductName = 'шт. яиц';
    }

    public function getProduct(): int
    {
        return rand(0, 1);
    }
}
