<?php

$income = (float) readline("Введите доход: ");
if ($income <= 20000) {
    $tax = $income * 0.10;
} elseif ($income <= 50000) {
    $tax = 2000 + ($income - 20000) * 0.15;
} else {
    $tax = 6500 + ($income - 50000) * 0.20;
}

$tax = round($tax, 2);           
$net = round($income - $tax, 2);

echo "Доход:    $income\n";
echo "Налог:    $tax\n";
echo "На руки:  $net\n";

?>