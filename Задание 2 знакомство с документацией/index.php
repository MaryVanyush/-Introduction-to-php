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



