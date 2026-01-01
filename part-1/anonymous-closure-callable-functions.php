<?php

$function = function () {
    return 'Hello, World!'.PHP_EOL;
};

echo $function();

// Closure means an anonymous function that can capture variables from its surrounding scope. In this example, we define an anonymous function that returns the string 'Hello, World!' and assign it to the variable $function. We then call this function using $function() and echo the result.

$x = 30;

// Closure
$function = function () use ($x) {
    return "The value of x is: $x".PHP_EOL;
};

if (is_callable($function)) {
    echo $function();
} else {
    echo 'Not callable function'.PHP_EOL;
}

// Callable function means a function that can be passed as an argument to another function or stored in a variable. In this example, we define a callable function that takes two parameters and returns their sum. We then call this function with the arguments 10 and 20 and echo the result.

function hello()
{
    return 'Hello from callable function!'.PHP_EOL;
}

echo call_user_func('hello');

// callable as  a parameter
function greetings(callable $hello)
{
    if (! is_callable($hello)) {
        echo 'Not a callable parameter!'.PHP_EOL;

        return;
    }
    $hello();
    echo 'Greetings from callable parameter!'.PHP_EOL;
}

greetings('hello');
greetings(function () {
    echo 'Hello from anonymous function passed as parameter!'.PHP_EOL;
});
