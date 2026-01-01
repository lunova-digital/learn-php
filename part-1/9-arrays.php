<?php

// we will learn arrays
$arr = [1, 2, 3, 4, 5]; // by using array function like this $arr = array(1, 2, 3, 4, 5);
echo '<pre>';
var_dump(print_r($arr)); // array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
echo '</pre>';
echo '<br/>';

// accessing array elements
var_dump($arr[0]); // int(1)

// new elmeent addition
$arr[] = 'faruk'; // adding new element at the end of the array
echo '<br/><pre>';
var_dump($arr); // array(6) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) [5]=> string(5) "faruk" }
echo '</pre>';

array_push($arr, 6, 7, 'name'); // adding new element at the end of the array using array_push() function
var_dump($arr[6]); // int(6)
echo '<br/><pre>';
var_dump($arr); // int(7)
echo '</pre><br/>';

// key value based array
$arr2 = [
    'name' => 'Rahim Mia',
    'age' => 30,
    'city' => 'Dhaka',
];

echo '<br/><pre>';
var_dump($arr2); // array(3) { ["name"]=> string(10) "Rahim Mia" ["age"]=> int(30) ["city"]=> string(5) "Dhaka" }
echo '</pre><br />';

echo 'Rahim Mia Biography: ';
echo "His name is: {$arr2['name']}. He is {$arr2['age']} years old. He live in {$arr2['city']}.";

echo '<br/>';
var_dump(count($arr2)); // int(3)
var_dump(count([])); // int(0)

// checking if a variable exists
echo '<br/>';
if (isset($wp)) {
    echo 'Variable $wp is set.';
} else {
    echo 'Variable $wp is not set.';
}

$wp = null;
echo '<br/>';
if (isset($wp)) {
    echo 'Variable $wp is set.';
} else {
    echo 'Variable $wp is not set.';
}
echo '<br/>';

$ar3 = [
    'name' => 'Karim',
    'age' => null,
];

if (isset($ar3['362'])) {
    echo '<br/>Key 362 exists in the array.<br/>';
} else {
    echo '<br/>Key 362 does not exist in the array.<br/>';
}

if (isset($ar3['age'])) {
    echo 'Key age exits.<br/>';
} else {
    echo 'Key age does not exists.<br/>';
}

// we will isset() to check the value or not defined. It will work fine if variable not defined or null value.

// From the above example we can see that isset() will return false if the value is null or not defined like the age exists in the key but it value is null so it will return false and for the key 362 it is not defined so it will return false. So we will use array_key_exists() function to check if the key exists in the array or not.

$x = PHP_INT_MAX;

if (is_array($x)) {
    echo 'This is an array.';
} else {
    echo 'This is not an array.';
}

$a = [1, 2, 3];
unset($a[1], $a[2]); // unsetting the array variable
echo '<br/>';
var_dump($a); // array(1) { [0]=> int(1) }
$a[] = 4; // this will add 4 at 3 index, we can $[count($a)] = 4; to add at the end of the array
echo '<br/>';
var_dump($a); // array(2) { [0]=> int(1) [3]=> int(4) }

// we can achieve this by doing array_values() function to reindex the array
$a = array_values($a);
echo '<br/>';
var_dump($a); // array(2) { [0]=> int(1) [1]=> int(4) }
echo '<br/>';

// array key existence check
$arr4 = [
    'firsts' => 'John',
    'last' => 'Doe',
];

if (array_key_exists('first', $arr4)) {
    echo "Key 'first' exists in the array.<br/>";
} else {
    echo "Key 'first' does not exist in the array.<br/>";
}

$arr = [
    'name' => 'Alice',
    'name' => 25,
    'name' => 'New York',
];

echo '<br/>';
var_dump($arr); // array(1) { ["name"]=> string(8)
echo '<br/>';

array_pop($arr); // removing the last element from the array
var_dump($arr); // [] --- very important
echo '<br/>';

$arr = ['a', 'b', 50 => 'c', 'd', 'e'];
echo '<br/><pre>';
var_dump($arr); // array(5) { [0]=> string(1) "a" [1]=> string(1) "b" [50]=> string(1) "c" [51]=> string(1) "d" [52]=> string(1) "e" }
echo count($arr); // int(5)
echo '</pre><br/>';
// It will not affect if we use string as a key in the array, it will work fine.
$arr = ['a', 'b', 'string' => 'c', 'd', 'e'];
