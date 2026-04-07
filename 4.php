<?php
function isPalindrome($str) {
    $str = str_replace(' ', '', $str);
    
    $str = mb_strtolower($str, 'UTF-8');
    
    $chars = preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);
    
    $reversedChars = array_reverse($chars);
    
    return $chars === $reversedChars;
}

echo "Введите строку: ";
$input = trim(fgets(STDIN));

if (empty($input)) {
    echo "Ошибка: Вы ничего не ввели!\n";
} else {
    if (isPalindrome($input)) {
        echo "\"$input\" - это палиндром!\n";
    } else {
        echo "\"$input\" - не палиндром\n";
    }
}
?>
