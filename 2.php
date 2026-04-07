<?php
echo "Введите число N: ";
$input = trim(fgets(STDIN));

if (!is_numeric($input) || $input <= 0 || strpos($input, '.') !== false) {
    echo "Ошибка: Введите целое положительное число (не 0, не буквы, не спецсимволы)\n";
} else {
    $N = (int)$input;
    $sum = 0;
    
    for ($i = 2; $i <= $N; $i += 2) {
        $sum += $i;
    }
    
    echo "Сумма чётных чисел от 1 до $N = $sum\n";
}
?>