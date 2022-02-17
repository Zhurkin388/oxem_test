<?php

require_once 'Chicken.php';
require_once 'Cow.php';

/**
 * Создание животных
 */

class RegisterAnimals
{
    public function getChicken(): Chicken
    {
        return new Chicken();
    }

    public function getCow(): Cow
    {
        return new Cow();
    }
}
