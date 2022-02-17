<?php

/**
 * Основной Абстрактный класс для животных
 */

abstract class Animals
{
    static int $registrationNumber = 0;

    abstract public function getProduct();
}
