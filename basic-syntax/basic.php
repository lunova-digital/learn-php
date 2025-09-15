<?php

// printing in php
echo 'Hello World! from echo';
echo '<br>';
echo 'Hellow World! from print';
echo '<br>';
print_r('Hello World! from print_r');
echo '<br>';
var_dump('Hello World! from var_dump');
echo '<br>';
$a = sprintf('Hello %s! from sprintf', 'World');
echo $a;
echo '<br>';

/******** Behaviors of echo ****/
// 1. Doesn't return anything
// $a = echo "Hello world";

// print($a); // Error
// 2. Can print multiple things by comma seperated
$firstName = 'Rabin';
$lastName = 'Khan';

echo $firstName, $lastName, '. He is a very greedy man'; // RabinKhan
echo '<br>';

/******** Behaviors of print ****/
// Slower than echo
// example of expression
// if (isset($firstname)) {
//     echo 'Variable is set';
// } else {
//     echo 'Variable is not set';
// }

// 1. We can use it on expression
if (print 'Hello World' === 1) {
    echo 'This will be printed because print returns 1';
} else {
    echo 'This will not be printed';
}

echo '<br>';
// 2. Always return 1 echo
echo print 'Hello World'; // Hello World1
echo '<br>';

/******** Behaviors of print_r ****/
// Example of array
$rabin_details = ['Rabin', 'Khan', 24, 'Kathmandu'];
// echo $rabin_details;
echo '<pre>';
print_r($rabin_details); // Array ( [0] => Rabin [1] => Khan [2] => 24 [3] => Kathmandu )
echo '</pre>';

/******** Behaviors of var_dump ****/
// var_dump uses for debugging
echo '<pre>';
var_dump($rabin_details); // array(4) { [0]=> string(5) "Rabin" [1]=> string(4) "Khan" [2]=> int(24) [3]=> string(9) "Kathmandu" }
echo '</pre>';

/******** Behaviors of sprintf ****/
// 1. Returns the formatted string instead of printing it
$formattedString = sprintf('My name is %s %s and I am %d years old.', 'Rabin', 'Khan', 24);
echo $formattedString;

// ; is a instruction seperator that help the interpreter to understand where the instruction ends

echo '<br />';
// don't need any instruction seperator when the file is ending before the last closing tag
echo 'Before end file'
// closing syntax?>

<!---- HTML outside of php. Don't need instruction seperator when printing by shorthand ---->
<?= '<br/>Hello from out of the main file' ?>


