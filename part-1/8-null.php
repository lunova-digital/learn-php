<?php

// null example
$a = null; // NULL
var_dump($a); // NULL

$b = ''; // we can call empty string is different from null but in normal comparison both are equal

// not strictly comparison
var_dump($b == null); // true
echo '<br/>';

// strictly comparison
var_dump($b === null); // false
echo '<br/>';

$c = 30;
unset($c);
var_dump($c); // NULL

echo '<br/>';
$d = 0;
var_dump($d == null); // true
var_dump($d === null); // false
