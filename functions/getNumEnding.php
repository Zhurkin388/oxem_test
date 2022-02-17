<?php
/**
 * Функция возвращает правильное склонение слова
 * @param int $number 'Число' под которое нужно склонять
 * @param array $endingArray Массив слов для склонения
 * @return string
*/

function getNumEnding(int $number, array $endingArray): string
{
    $number = $number % 100;
    if ($number >= 11 && $number <= 19) {
        $ending = $endingArray[2];
    } else {
        $i = $number % 10;

        $ending = match ($i) {
            1 => $endingArray[0],
            2, 3, 4 => $endingArray[1],
            default => $endingArray[2],
        };
    }
    return $ending;
}
