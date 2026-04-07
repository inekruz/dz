<?php
echo "Калькулятор\n";
echo "X1: ";
$X1 = trim(fgets(STDIN));

echo "SYM (+, -, *, /): ";
$sym = trim(fgets(STDIN));

echo "X2: ";
$X2 = trim(fgets(STDIN));

$res = null;
$error = null;

switch ($sym) {
    case '+':
        $res = $X1 + $X2;
        break;
    case '-':
        $res = $X1 - $X2;
        break;
    case '*':
        $res = $X1 * $X2;
        break;
    case '/':
        if ($X2 == 0) {
            $error = "Ошибка: Деление на ноль низя!";
        } else {
            $res = $X1 / $X2;
        }
        break;
    default:
        $error = "Неверная операция";
}

if ($error) {
    echo $error . "\n";
} else {
    echo "Результат: $X1 $sym $X2 = $res\n";
}
?>