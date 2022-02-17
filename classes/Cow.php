<?php

require_once 'abstract/Animals.php';

/**
 * Класс Коровы
 */

class Cow extends Animals
{
    public function __construct()
    {
        $this::$registrationNumber++;
    }

    public function getProduct(): int
    {
        return rand(8, 12);
    }
}
