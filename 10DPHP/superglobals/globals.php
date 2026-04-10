<?php

define('BR', '<br/><br/>');

echo '<a href="'.$_SERVER['SERVER_NAME'].'/hello.php">Hello.php</a>';

function test()
{
    $foo = 'local variable';

    echo '$foo in global scope: '.$GLOBALS['foo'].BR;
    echo '$foo in current scope: '.$foo.BR;
}

$foo = 'Example content';
test();
