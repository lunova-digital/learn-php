<?php

function increment()
{
    $count = 0;

    return ++$count;
}

echo increment().'<br/>'; // 1
echo increment().'<br/>'; // 1

// Static variable start here
function sincrement()
{
    static $count = 0;

    return ++$count;
}

echo sincrement().'<br/>'; // 1
echo sincrement().'<br/>'; // 2
echo sincrement().'<br/>'; // 3
