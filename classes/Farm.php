<?php

namespace App;

require_once 'functions/getNumEnding.php';

/**
 * Класс, реализующий ферму, содержащую животных
 */
class Farm
{
    const WEEK = 7;
    private $animals;

    public function __construct($animals)
    {
        $this->animals = $animals;
    }

    public function getCountAnimals($animal): array
    {
        $arr = [];

        for ($i = 0; $i < $animal->countAnimal; $i++) {
            $arr[] = $animal;
        }

        return $arr;
    }

    public function countProducts($animals)
    {
        $product = 0;

        foreach ($animals as $count) {
            $product += $count->getProduct();
        }

        return $product;
    }

    public function countDays($animals)
    {
        $sum = 0;

        for ($i = 0; $i < self::WEEK; $i++) {
            $sum += $this->countProducts($animals);
        }

        return $sum;
    }

    public function init(): string
    {
        $str = '';

        foreach ($this->animals as $animal) {
            $product = $this->countDays($this->getCountAnimals($animal));

            $str .= ' ' .
                $animal->countAnimal . ' ' .
                getNumEnding($animal->countAnimal, [$animal->getName . 'а', $animal->getName . 'ы', $animal->getName]) . ' ' .
                $product . ' ' . $animal->getProductName;
        }

        return $str;
    }
}
