<?php

// 1 Знакомство_с_PHP
// задание 1

echo __LINE__ ."\n";
echo __FILE__ ."\n";


// задание 2
$str = <<<EOT
Создайте многострочную переменную
при помощи
heredoc синтаксиса.
EOT;

print_r($str);
echo $str ."\n";

// задание 3

$a = 'Рыба';
$b = 'человек';


echo "$a рыбою сыта, а $b человеком\n";
echo $a . ' рыбою сыта, а ' . $b . ' человеком';



//2 Консольные приложения в PHP

$variable = true;
// $variable = 1;
// $variable = 'one';
// $variable = 3.14;
// $variable = null;
// $variable = [];


if (is_bool($variable)) {
    echo "bool";
} elseif (is_float($variable)) {
    echo "float";
} elseif (is_int($variable)) {
    echo "int";
} elseif (is_string($variable)) {
    echo "string";
} elseif (is_null($variable)) {
    echo "null";
} else {
    echo "other";
}


// Дополнительно

switch (true) {
    case is_bool($variable):
        echo "bool";
        break;
    case is_float($variable):
        echo "float";
        break;
    case is_int($variable):
        echo "int";
        break;
    case is_string($variable):
        echo "string";
        break;
    case is_null($variable):
        echo "null";
        break;
    default:
        echo "other";
}
