<?php

echo "Введите год: ";
$input = trim(fgets(STDIN));           
$year  = (int)$input;

if ($year <= 0) {
    echo "Год должен быть положительным числом!\n";
    exit;
}

$is_leap = ($year % 4 === 0 && $year % 100 !== 0) || ($year % 400 === 0);

echo $year . " — " . ($is_leap ? "високосный" : "обычный") . " год\n";
