<?php

$a = 'Hello, World!'; // another way to write a string is using double quotes ""
$firstName = 'David'; // using double quotes
$lastName = 'Bekham'; // using single quotes

var_dump($a); // string(13) "Hello, World!"
echo '<br/>';

$name = "{$firstName} {$lastName}"; // David Bekham
echo $name;
echo '<br/>';

$name = $firstName.' '.$lastName; // concatenation operator is .
echo $name; // David Bekham
echo '<br/>';

$name = "$firstName $lastName"; // using double quotes for variable interpolation
echo $name; // David Bekham
echo '<br/>';

var_dump($name[0]); // string(1) "D"
var_dump($name[-1]); // string(1) "m"
var_dump(strlen($name)); // int(12)

echo '<br/>';
$name[200] = 'Y'; // trying to assign value to out of bound index it works in php
var_dump($name); // string(201) "David Bekham

// Example of heredoc and nowdoc syntax
echo '<br/>';
$x = __DIR__; // these are magic constants of php
$y = __LINE__;

$heredoc = <<<TEXT
DIR: $x <br/>
LINE: $y <br/>
TEXT;

echo $heredoc;

$data = <<<TEXT
This is a heredoc example.
Y from $y line numbers.
TEXT;

var_dump($data);

echo '<br/>';
$nowdoc = <<<'TEXT'
DIR: $x <br/>
LINE: $y <br/>
TEXT;

echo $nowdoc;

echo '<br/>';
echo nl2br("Hello! This is Rahim Mia.\n I live in Dhaka.\n I love PHP programming."); // using nl2br() function to convert new line to <br/> tag

echo '<br/>';
$x = PHP_FLOAT_MAX * 2;
var_dump($x); // float(INF)
var_dump(is_string($x));
$x = 'hello';
var_dump(is_string($x));
