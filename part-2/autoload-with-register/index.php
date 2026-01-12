<?php

spl_autoload_register(function ($class) {
//    echo $class . PHP_EOL;

    $class = str_replace('\\', '/', $class);

//    var_dump($class) . PHP_EOL;

    $file = __DIR__ . "/$class.php";

//    var_dump($file);

   if (file_exists($file)) {
       require_once $file;
   }
});

use App\TestClass;
use Tests\AppTest;
use App\Bank\BankAccount;

new TestClass();
new AppTest();

$account1_details = (new BankAccount('Jhon Doe', 23983.00))
    ->deposit(3000)
    ->withdraw(1000)
    ->getAccountDetails();

var_dump($account1_details);
