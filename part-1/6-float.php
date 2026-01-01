<?php

// we are exploring float data type
var_dump(PHP_FLOAT_MAX); // maximum float value;
var_dump(PHP_FLOAT_MIN); // maximum float min value;

$a = 1.234;
$b = 1234;
var_dump($a); // float(1.234)
var_dump($b); // int(1234)
echo '<br/>';

// expert value always float though not return any decimal point like 1200.0
$a = 1.2e3; // 1.2 x 10^3 = 1200
var_dump($a); // float(1200)
// directly assigning integer value
$a = 1200; // integer
var_dump($a); // int(1200)

echo '<br/>';
// What if we add a +1 to the float value?
var_dump(PHP_FLOAT_MAX * 2); // INF

// What can we do to made this INF
var_dump(PHP_FLOAT_MIN); // this is nearly 0 then how we can assignee negative in the float in php
// We can assign negative float value because PHP_FLOAT_MIN is the minimum positive float value
echo '<br/>';

$x = -39.12;
var_dump($x); // float(-39.12)

echo '<br/>';
// we can also use underscore in float value for better readability
$y = -PHP_FLOAT_MAX;
var_dump($y); // float(-1.7976931348623E+308)
// So exactly the negative of float max is the lowest negative float value.
echo '<br/>';
// We can multiply the lowest negative float value with 2 to get negative infinity
var_dump($y * 2); // float(-INF)

$x = NAN; // Not A Number
var_dump($x); // float(NAN)
echo '<br/>';

// checking NAN value
// nan mean is not a number. is_nan() -> is not a number -> is_nan true = not a number, false = is a number
var_dump(is_nan($x)); // bool(true)
echo '<br/>';

$x = 300.78;
var_dump(is_nan($x)); // bool(false)
var_dump(is_float($x)); // bool(true)
var_dump(is_finite($x)); // bool(true)
echo '<br/>';

// checking infinite value
var_dump(is_infinite(PHP_FLOAT_MAX * 2)); // bool(true)

// A example of NAN
var_dump(sqrt(-1)); // float(NAN)
var_dump(log(-1)); // float(NAN)

// A example of INF
var_dump(fdiv(1, 0));
