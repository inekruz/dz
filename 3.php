<?php
$numbers = [];
for ($i = 0; $i < 10; $i++) {
    $numbers[] = rand(1, 100);
}

echo "Исходный массив: " . implode(", ", $numbers) . "\n";

$max = max($numbers);
$min = min($numbers);
$average = array_sum($numbers) / count($numbers);

echo "Максимум: $max\n";
echo "Минимум: $min\n";
echo "Среднее арифметическое: " . round($average, 2) . "\n";

$greaterThanAverage = [];
foreach ($numbers as $num) {
    if ($num > $average) {
        $greaterThanAverage[] = $num;
    }
}
echo "Числа больше среднего: " . implode(", ", $greaterThanAverage) . "\n";

$sorted = $numbers;
$n = count($sorted);
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($sorted[$j] > $sorted[$j + 1]) {
            $temp = $sorted[$j];
            $sorted[$j] = $sorted[$j + 1];
            $sorted[$j + 1] = $temp;
        }
    }
}
echo "Отсортированный массив: " . implode(", ", $sorted) . "\n";
?>