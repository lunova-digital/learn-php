<?php

$x = 10;

function test()
{
    global $x;
    echo $x.PHP_EOL;
}

function test2()
{
    echo $GLOBALS['x'].PHP_EOL;
}

test(); // This will cause an error: Undefined variable $x;
test2(); // This will print 10
