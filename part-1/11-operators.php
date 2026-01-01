<?php

/**
 * Operators in PHP
 * 1. Arithmetic Operators (+ - * / % **)
 * 2. Assignment Operators (=, +=, -=, *=, /=, %=, **=)
 * 3. String Operators (., .=)
 * 4. Comparison Operators (==, ===, !=, !==, <>, <, >, <=, >=, <=>)
 * 5. Increment/Decrement Operators (++, --)
 * 6. Logical Operators (and, or, xor, &&, ||, !)
 * 7. Array Operators (+, ==, ===, !=, !==, <>)
 * 8. Error Control Operator (@)
 */

// 1. Arithmetic Operators
$a = 10;
$b = 3;
$sum = $a + $b; // Addition
$diff = $a - $b; // Subtraction
$prod = $a * $b; // Multiplication
$quot = $a / $b; // Division
$mod = $a % $b; // Modulus
$exp = $a ** $b; // Exponentiation
var_dump($sum, $diff, $prod, $quot, $mod, $exp);
$a = 5.5;
$b = 3.2;
var_dump($a % $b);
var_dump(fmod($a, $b)); // use fmod for float Modulus
echo '<br/>';

// 2. Assignment Operators
$x = 10;
$x += 5; // $x = $x + 5 $x = $x % 5; $x %= 5;
var_dump($x);
$x *= 2; // $x = $x * 2
var_dump($x);
echo '<br/>';

// 3. String Operators
$str1 = 'Hello,';
$str2 = 'World!';
$greeting = $str1.' '.$str2; // Concatenation
var_dump($greeting);
$str1 .= ' How are you?'; // Concatenation assignment  $st1 = $str1 . ' How are you?'
var_dump($str1);
echo '<br/>';

// 4. Comparison Operators
$a = 10;
$b = '10';
var_dump($a == $b); // Equal
var_dump($a === $b); // Identical
var_dump($a != $b); // Not equal
var_dump($a !== $b); // Not identical
var_dump($a < $b); // Less than
var_dump($a <= $b); // Less than or equal to
var_dump($a > $b); // Greater than
var_dump($a >= $b); // Greater than or equal to
$b = 30;
var_dump($a <=> $b); // Spaceship operator 0 when equal, -1 when left is smaller, 1 when right is smaller
echo '<br/>';

// 5. Increment/Decrement Operators
$num = 5;
// post increment
echo $num++; // 5
echo $num;   // 6
echo '<br/>';
// pre increment
echo ++$num; // 7
echo $num;   // 7
echo '<br/>';
// Same to decrement

// 6. Logical Operators
// and, or, xor, &&, ||, ! (and or xor is lower precedence than && and ||). The main difference is precendence
$a = true;
$b = false;

var_dump($a && $b); // Logical AND
var_dump($a || $b);  // Logical OR
var_dump($a ^ $b); // Logical XOR
var_dump(! $a);       // Logical NOT
echo '<br/>';

// 7. Array Operators
$arr = ['a' => 1, 'b' => 2];
$arr2 = ['b' => 3, 'c' => 4];
$union = $arr + $arr2; // union, if same array key exists then first array value will be taken in union
var_dump($union);
var_dump($arr == $arr2); // equality
var_dump($arr === $arr2); // identity
var_dump($arr != $arr2); // inequality
var_dump($arr !== $arr2); // non-identity
echo '<br/>';

// 8. Error Control Operators
$filename = 'non_existent_file.txt';
// Suppress error using @
$content = @file_get_contents($filename);
if ($content === false) {
    echo "Could not read the file: $filename";
} else {
    echo $content;
}
