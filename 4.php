<?php
function isPalindrome($str) {
    $str = str_replace(' ', '', $str);
    $str = strtolower($str);
    
    return $str === strrev($str);
}

echo "Введите строку: ";
$input = trim(fgets(STDIN));

if (empty($input)) {
    echo "Пожалуйста, введите строку\n";
} else {
    if (isPalindrome($input)) {
        echo "\"$input\" - это палиндром!\n";
    } else {
        echo "\"$input\" - не палиндром\n";
    }
}
?>