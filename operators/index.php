<?php

function dd(...$vars)
{
    echo '<pre>';
    foreach ($vars as $var) {
        var_dump($var);
        echo '<br />';
    }
    echo '</pre>';
}

// Concept of expression and statement
echo 'Hello world!';

if ($a == $b) {
    echo 'a is equal to b';
} else {
    echo 'a is not equal to b';
}

// Operators
// 1. Operator precedence
// What is operator precedence?
// Operator precedence determines the order in which operators are evaluated in an expression.
// Operators with higher precedence are evaluated before operators with lower precedence.
// #

// 2. Arithmetic operators
// Arithmetic operators are used to perform mathematical operations.
// The basic arithmetic operators are:
// + (addition), - (subtraction), * (multiplication), / (division), % (modulus)
$a = 10;
$b = 3;

$sum = $a + $b; // 13
$difference = $a - $b; // 7
$product = $a * $b; // 30
$quotient = $a / $b; // 3.3333
$modulus = $a % $b; // 1, remainder of division, 10 / 3 = 3,

dd($sum, $difference, $product, $quotient, $modulus);

// 3. Assignment Operators
// Assignment operators are used to assign values to variables.
// The basic assignment operator is = (equal).
// There are also compound assignment operators that combine assignment with another operation.
// +=, -=, *=, /=, %=
$a = 10; // initially $a is 10
dd($a);
$a += 10; // a = a + 10 -> short form $a += 10 -> $a = $a + 10 -> $a = 10 + 10 -> $a = 20
dd($a);
$a -= 05; // a = a - 5 -> short form $a -= 5 -> $a = $a - 5 -> $a = 20 - 5 -> $a = 15
dd($a);
$a *= 10; // a = a * 10 -> short form $a *= 10 -> $a = $a * 10 -> $a = 15 * 10 -> $a = 150
dd($a);
$a /= 5; // a = a / 5 -> short form $a /= 5 -> $a = $a / 5 -> $a = 150 / 5 -> $a = 30
dd($a);
$a %= 6; // 30 % 6 -> 0, remainder of division, 30 / 6 = 5, remainder 0
dd($a);

// 3. Comparison Operators
// Comparison operators are used to compare two values.
// The basic comparison operators are:
// == (equal), != (not equal), === (identical), !== (not identical), < (less than), > (greater than), <= (less than or equal to), >= (greater than or equal to)
$a = 10;
$b = '10';
$c = 20;

dd($a == $b); // true, because values are equal
dd($a === $b); // false, because values are equal but types are different

dd($a != $c); // true, because values are not equal
dd($a !== $b); // true, because values are equal but types are different

dd($a < $c); // true, because 10 is less than 20
dd($a > $c); // false, because 10 is not greater than 20
dd($a <= $b); // true, because 10 is less than or equal to
dd($a < $b); // false, because 10 is not less than
dd($a >= $b); // true, because 10 is greater than or equal to
dd($a > $b); // false, because 10 is not greater than

// 4. Logical Operators
// Logical operators are used to combine multiple conditions.
// The basic logical operators are:
// && (and), || (or), ! (not)
// and (&&) - true if both conditions are true
// or (||) - true if at least one condition is true
// not (!) - true if the condition is false
$a = 10;
$b = 20;

dd($a < 15 && $b > 15); // true, because both conditions are true
dd($a < 15 || $b < 15); // true, because at least one condition is true
dd(! ($a < 15)); // false, because the condition is true, so not

// 5. Increment and Decrement operators
// Increment and decrement operators are used to increase or decrease the value of a variable by 1.
// The increment operator is ++ and the decrement operator is --.
$a = 10;
$a += 10; // $a = $a + 10 -> $a = 10 + 10 -> $a = 20
dd($a); // 20
$a++; // $a += 1; $a = $a + 1 -> $a = 20 + 1 -> $a = 21
dd($a); // 21
$a++;
// difference between $a++ and ++$a the pre increment and the post increment
// $a-- is post Decrement
// --$a is pre Decrement
// $a = $a - 1; $a -= 1;
$a--; // $a -= 1; $a = $a - 1 -> $a = 21 - 1 -> $a = 20
dd($a); // 20
$a--; // $a -= 1; $a = $a - 1 -> $
dd($a); // 19

// 6. String operators
// String operators are used to concatenate strings.
// The basic string operator is . (dot).
$firstName = 'John';
$lastName = 'Doe';

$fullName = $firstName.' '.$lastName; // John Doe
dd($fullName);
$fullName .= ' is a developer.'; // John Doe is a developer. $a = $a . ' is a developer.'
dd($fullName);

// 7. Array Operators
// Array operators are used to compare arrays.
// The basic array operators are:
// + (union), == (equal), === (identical), != (not equal), !== (not identical)
$array1 = ['a' => 'apple', 'b' => 'banana'];
$array2 = ['b' => 'banana', 'c' => 'cherry'];

$union = $array1 + $array2; // union of $array1 and $array2
dd($union); // ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry']
dd($array1 == $array2); // false, because arrays are not equal
dd($array1 === $array2); // false, because arrays are not identical
dd($array1 != $array2); // true, because arrays are not equal
dd($array1 !== $array2); // true, because arrays are not identical
