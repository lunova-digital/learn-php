<?php

function br()
{
    echo '<br/>';
}

// Integer data type in PHP
$d = 10; // base 10 (decimal)
$b = 0b1010; // base 2 (binary);
$o = 012; // base 8 (octal)
$h = 0xF; // base 16 (hexadecimal)

var_dump($d);
br(); // Output: 10
var_dump($b);
br(); // Output: 10
var_dump($o);
br(); // Output: 10
var_dump($h);
br(); // Output: 15

// Integer max and min value
$maxInt = PHP_INT_MAX; // pre defined constant
echo 'Max Integer Value: '.$maxInt;
br();
var_dump($maxInt + 1); // float
br();
var_dump(PHP_INT_MIN);
var_dump(PHP_INT_MIN - 1); // float

$a = '100abc';
$intA = (int) $a; // type casting string to integer
var_dump($intA); // Output: int(100)
br();
$b = 100_000_000;
var_dump($b); // Output: int(100000000)
br();

// if a integer not zero the it return true when cast as boolean
$intValue = 20;
$boolValue = (bool) $intValue;
var_dump($boolValue); // Output: bool(true)
br();

$intValue = 0;
$boolValue = (bool) $intValue;
var_dump($boolValue); // Output: bool(false)
br();

$intValue = -15;
$boolValue = (bool) $intValue;
var_dump($boolValue); // Output: bool(true)
br();

$x = '320';
var_dump(is_int($x)); // Output: bool(false)
if (is_int($x) === false) {
    echo 'This is not integer<br/>';
} else {
    echo 'This is integer<br/>';
}

$x = false;
if (is_int($x) === false) {
    echo 'I am on the block 1 <br/>';
} else {
    echo 'I am on the block 2<br/>';
}
