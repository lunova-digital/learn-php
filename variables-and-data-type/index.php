<?php

// functions
function dd(...$vars)
{
    foreach ($vars as $var) {
        var_dump($var);
        echo '<br>';
    }
}

// # Null Data Type #
$a = null; // NULL
$b = 'not null'; // string

// functions related to data type
dd(is_null($a)); // true
dd(is_null($b)); // false

// unset to set a variable to null
unset($b);
dd(is_null($b)); // true

// # Boolean Data Type #
// true or false
// Writing approaches True, TRUE, true are all valid, same as false, FALSE, False
$a = true; // boolean
$b = false; // boolean

dd($a); // true
dd($b); // false

// # Integer Data Type #
// Whole numbers without a decimal point
// Can be positive or negative
// Can be written in decimal (base 10), hexadecimal (base 16), octal (base 8) or binary (base 2) notation
// Examples: 1234 (decimal), -123 (decimal), 0x1A (hexadecimal), 0123 (octal), 0b1010 (binary)

$a = 1234; // decimal
$b = -123; // decimal
$c = 0x1A; // hexadecimal
$d = 0123; // octal
$e = 0b1010; // binary
$f = 1_000_000; // decimal with underscore for readability (PHP 7.4+)
$g = PHP_INT_MAX; // maximum integer value
$h = PHP_INT_MIN; // minimum integer value
$i = PHP_INT_SIZE; // size of an integer in bytes
$j = PHP_INT_MAX + 1; // overflow to float
$k = PHP_INT_MIN - 1; // underflow to float
$l = 0; // zero

dd($a); // int(1234)
dd($b); // int(-123)
dd($c); // int(26)
dd($d); // int(83)
dd($e); // int(10)
dd($f); // int(1000000)
dd($g); // int(9223372036854775807) on 64
dd($h); // int(-9223372036854775808) on 64
dd($i); // int(8) on 64
dd($j); // float(9.2233720368548E+18)
dd($k); // float(-9.2233720368548E+18)
dd($l); // int(0)

// # Float (Double) Data Type #
// Numbers with a decimal point or in exponential form (12.2322)
$a = 1.234; // float
dd($a); // float(1.234)

// # String Data Type #region
// single quoted strings
// 'to start click here'
// double quoted strings
// "to start click here"
$a = 'Hello, World!'; // single quoted strings
$b = 'Hello, World!'; // double quoted strings
dd($a, $b); // string(13) "Hello, World!"

// Heredoc syntax
$str = <<<INTRO
This is a heredoc string. 
It can span multiple lines.
Variables like $a are parsed.
INTRO;

echo $str;

// print without variable
echo <<<OUTRO
        This is a heredoc string.
    It can span multiple lines.
Variables like $a are not parsed.
OUTRO;

// Nowdoc syntax
// Similar to heredoc, but variables are not parsed
// Use single quotes around the identifier
$str = <<<'EOD'
This is a nowdoc string.
It can span multiple lines.
Variables like $a are not parsed.
EOD;

echo $str;
echo '<br>';

// This is a numeric string
// String (1)
$strb = '1'; // string
dd((int) $strb); // int(1)

$arr = [1, 2, 3]; // array of integers
$arr2 = ['a', 'b', 'c']; // array of characters
$arr3 = [1, 'b', 3.5, true]; // array of mixed types
$arr4 = [
    'name' => "Faruk'",
    'age' => 30,
    'is_student' => false,
    'grades' => [90, 85, 88],
    'null' => null,
    $arr,
    'arr3' => $arr3,
];
echo '<pre>';
dd($arr, $arr2, $arr3, $arr4);
echo '</pre>';

// convert array to json
echo json_encode($arr4); // json_endcode function can encode any array to the json format

// # Object Data Type #
$obj = new stdClass;
$obj->name = 'Faruk';
$obj->age = 30;
echo '<pre>';
dd($obj);
echo '</pre>';

// We can follow two approach for constants
// We can not rewrite a constant
// 1. define() functions
// 2. const keyword
define('PI', 3.14); // constant using define() function
const E = 2.71; // constant using const keyword
dd(PI, E); // float(3.14) float(2.71)

if (defined('PI')) {
    echo 'PI is defined';
} else {
    echo 'PI is not defined';
}

if (defined('F')) {
    echo 'F is defined';
} else {
    echo 'F is not defined';
}
echo '<br>';

// Type Juggling
// PHP is a loosely typed language, which means you don't have to declare the data type overflow
// of a variable. PHP automatically converts the variable to the correct data type, depending on its value.
// This is called type juggling.
$var = '10'; // string
dd($var); // string(2) "10"
$var = $var + 5; // integers
dd($var); // int(15)
$var = $var.' is a string now. '.$str; // strings
dd($var); // string(20) "15 is a string now"
