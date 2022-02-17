<?php

require_once 'RegisterAnimals.php';
require_once 'functions/getNumEnding.php';

/**
 * Класс, реализующий ферму, содержащую животных
 */

class Farm
{
    const WEEK = 7;

    private int $cow;
    private int $chicken;
    private RegisterAnimals $animal;

    public function __construct(int $cow, int $chicken)
    {
        $this->cow = $cow;
        $this->chicken = $chicken;

        $this->animal = new RegisterAnimals();
    }

    public function getCountCow(): array
    {
        $arr = [];

        for ($i = 0; $i < $this->cow; $i++) {
            $arr[] = $this->animal->getCow();
        }

        return $arr;
    }

    public function getCountChicken(): array
    {
        $arr = [];

        for ($i = 0; $i < $this->chicken; $i++) {
            $arr[] = $this->animal->getChicken();
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
        $milk = $this->countDays($this->getCountCow());
        $eggs = $this->countDays($this->getCountChicken());

        return (
            $this->cow . ' ' .
            getNumEnding($this->cow, ['Корова', 'Коровы', 'Коров']) . ' дали ' .
            $milk . ' ' .
            getNumEnding($milk, ['литр', 'литра', 'литров']) . ' молока, ' .
            $this->chicken . ' ' .
            getNumEnding($this->chicken, ['курица', 'курицы', 'куриц']) . ' снесли ' .
            $eggs . ' ' .
            getNumEnding($eggs, ['яйцо', 'яйца', 'яиц']));
    }
}
