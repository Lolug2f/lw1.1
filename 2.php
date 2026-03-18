<?php

echo "Введите три числа:\n";
$sa = (float) readline("Sa = ");
$sb = (float) readline("Sb = ");
$sc = (float) readline("Sc = ");

// Вариант 1 — через if
if ($sa >= $sb && $sa >= $sc) {
    $max = $sa;
} elseif ($sb >= $sa && $sb >= $sc) {
    $max = $sb;
} else {
    $max = $sc;
}

echo "Наибольшее: $max\n";

$max = $sa >= $sb 
    ? ($sa >= $sc ? $sa : $sc) 
    : ($sb >= $sc ? $sb : $sc);

echo "Максимум: $max\n";

?>