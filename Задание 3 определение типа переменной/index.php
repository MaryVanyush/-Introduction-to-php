<?php

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