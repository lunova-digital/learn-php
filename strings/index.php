<?php

$p = function (...$args) {
    foreach ($args as $arg) {
        var_dump($arg);
    }
};

$a = "Hello, 'Nothing'";
$b = 'Hello, "Nothing"';
$c = 'Hello, "Nothing"';
$d = 'Hello, \'Nothing\'';

// addcslashes — Quote string with slashes in a C style
$p("zoo['.']", 'z..A'); // outputs: \zoo\[\'.\']
$p('foo[.]bar', 'A..z'); // outputs: \f\o\o\[.\]\b\a\r
echo addcslashes('Abcd', 'A');

// Add shashes — Quote string with slashes
echo addslashes("O'Reilly"); // outputs: O\'Reilly

$greetings = 'Hello, World!';
echo bin2hex($greetings); // outputs: 48656c6c6f2c20576f726c6421

$format = 'There are %d monkeys in the %s';
echo sprintf($format, 4, 'tree'); // outputs: There are 4 monkeys in the tree

// md5 — Calculate the md5 hash of a string
echo md5('The quick brown fox jumps over the lazy dog'); // outputs: 9
