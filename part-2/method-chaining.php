<?php

require_once __DIR__ . '/App/Bank/BankAccount.php';
require_once __DIR__ . '/App/Bank/Duplicate/BankAccount.php';
require_once __DIR__ . '/App/Bank/TestBankAccountClass.php';

use App\Bank\BankAccount;
use App\Bank\Enum\Bank

// Second account for transfer demonstration
$account2 = new BankAccount("Jane Smith", 500.0);

// Creating another object
$account1 = (new BankAccount("John Doe", 1000.0));
// Creating an object
// method chaining demonstration
$balance = $account1
    ->deposit(4057.75)
    ->showBalance()
    ->withdraw(1000.0)
    ->showBalance()
    ->deposit(10000)
    ->showBalance()
    ->withdraw(4000)
    ->showBalance()
    ->transfer($account2, 500.0)
    ->showBalance()
    ->transfer($account2, 1057.75)
    ->showBalance()
    ->getBalance();

var_dump($balance);
var_dump($account2->getBalance());

$var = '{
    "name": "John", 
    "age": 30, 
    "city": "New York",
    "skills": ["HTML", "CSS", "JavaScript"]
}';

$data = json_decode($var, true);
var_dump($data['name']);

$data = json_decode($var);
var_dump($data->age);

$arr = new \StdClass();
$arr->name = "Jane Smith";
$arr->age = 25;
$arr->city = "Los Angeles";
$arr->skills = null;

// null safe operator demonstration
var_dump($arr->skills ?? "No skills available");

$arr = (object) [
    "name" => "Jane Smith",
    "age" => 25,
    "city" => "Los Angeles"
];

var_dump($arr);

$encoded_json = json_encode($arr);
var_dump($encoded_json);
