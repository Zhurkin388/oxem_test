<?php

namespace App\abstract;

/**
 * Основной Абстрактный класс для животных
 */
abstract class Animals
{
    static int $registrationNumber = 0;
    public int $countAnimal;
    public string $getName;
    public string $getProductName;

    abstract public function getProduct();
}
