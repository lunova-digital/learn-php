<?php

// constants never change their value
// there is two syntax to declare constant
define('SITE_NAME', 'Our Site');

// When we declare a variable php we need a $(dollar) sign before the name
echo SITE_NAME.'<br/>';

const SITE_URL = 'http://localhost:8080';
echo SITE_URL.'<br/>';

// define vs const
// constant is compile time declaration
// define is runtime declaration
// What is runtime and compile time?
// Compile time means when the code is being compile or interpreted by the compiler or interpreter and it's value can't be changed one compiled.
// Runtime means when the code is being executed and it's value can be changed during execution.
define('TIME', time()); // Runtime declaration
echo TIME.'<br/>';

// const TIME_CONST = time(); // Compile time declaration

// get hours from time
echo date('H:i:s', TIME).'<br/>';
