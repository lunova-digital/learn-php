<?php

// bool data type basically represent two variables true or false
$x = true;
var_dump($x); // Output: bool(true)
echo '<br/>';

$x = false;
var_dump($x); // Output: bool(false)
echo '<br/>';

$a = -0; // 0 or -0
var_dump((bool) $a); // Output: bool(false)
echo '<br/>';

$a = ''; // ""
var_dump((bool) $a); // Output: bool(false)
echo '<br/>';

$a = [];
var_dump((bool) $a); // Output: bool(false)
echo '<br/>';

$a = 10;
var_dump((bool) $a); // Output: bool(true)
echo '<br/>';

$a = -1;
var_dump((bool) $a); // Output: bool(true)
echo '<br/>';

$f = 0.0; // 0.0 or -0.0
var_dump((bool) $f); // Output: bool(false)
echo '<br/>';

$a = 'Hello';
var_dump((bool) $a); // Output: bool(true)
echo '<br/>';

$a = [1, 2, 3];
var_dump((bool) $a); // Output: bool(true)
echo '<br/>';

$a = '30';
if (is_bool($a) === true) {
    echo 'This is boolean<br/>';
} else {
    echo 'This is not boolean<br/>';
}

$b = false;
if (is_bool($b) === false) {
    echo 'I am on the block 1 <br/>';
} else {
    echo 'I am on the block 2<br/>';
}
