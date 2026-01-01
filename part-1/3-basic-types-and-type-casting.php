<?php

// variable declaration
// integer ( 1 10 20 -20 )
$a = 20;
$b = 30;
echo $a + $b.'<br/>';
// float
$a = 10.5;
$b = 20.3;
echo $a + $b.'<br/>';
// string
$a = 'Hello ';
$b = 'World';
echo $a.' '.$b.'<br/>';
// boolean
$a = true;
$b = false;
var_dump($a); // Output: bool(true)
// array
$a = [1, 2, 3, 4, 5];
echo '<br/><pre>';
var_dump($a); // Output: array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
// key value pair array
$a = [
    'name' => 'Rafiq',
    'age' => 30,
    'city' => 'Dhaka',
];
var_dump($a); // Output: array(3) { ["name"]=> string(5) "Rafiq" ["age"]=> int(30) ["city"]=> string(5) "Dhaka" }
echo '</pre><br/>';

$a = (int) '10';
var_dump($a); // string(2) "10"

$b = (float) '10.5';
var_dump($b); // float(10.5)

$c = (int) '1200xyz';
var_dump($c); // int(1200)

$c = (int) 10.6;
var_dump($c); // int(10)

$d = (string) 100;
var_dump($d); // string(3) "100"

$e = (bool) 1;
var_dump($e); // bool(true)

$f = (int) 'xyz';
var_dump($f); // int(0)

// Statically typed language (C.C++, Java) - type must be decalred because it is compiled time
// Dynamically typed language (Python, JavaScript, PHP) - type is not need to pre determined because it is runtime
