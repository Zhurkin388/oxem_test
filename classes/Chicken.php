<?php

require_once 'abstract/Animals.php';

/**
 * Класс Курицы
 */

class Chicken extends Animals
{
    public function __construct()
    {
        $this::$registrationNumber++;
    }

    public function getProduct(): int
    {
        return rand(0, 1);
    }
}
