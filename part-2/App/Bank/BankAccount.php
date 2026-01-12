<?php

namespace App\Bank;

require_once __DIR__. '/Enum/AccountType.php';

use App\Bank\Enum\AccountType;

class BankAccount {
    // Properties
    private int $accountNumber;

    // Constructor to initialize account
    // Property Promotion feature of PHP 8.0 used here
    public function __construct(
        public string $accountName,
        public float $balance,
        // null safe operator feature of PHP 8.0 used here
        public ?string $father_name = null,
        public AccountType $accountType = AccountType::SAVINGS
    )
    {
        $this->isEligible($accountType, $balance);
        $this->setAccountNumber();
    }

    // isEligible method to check if the account is eligible to create
    private function isEligible($accountType, $balance): void {
        if( $accountType === AccountType::SAVINGS && $balance < 500){
            echo "To create saving account min 500BDT needed.";
            exit;
        }

        if( $accountType === AccountType::CURRENT && $balance < 1000){
            echo "To create current account min 1000BDT needed.";
            exit;
        }
    }

    // setAccountNumber method to set a random account number
    private function setAccountNumber(): void {
        $this->accountNumber = rand(100000, 999999);
    }

    // getAccountNumber method to get the account number
    public function getAccountDetails(): string {
        return "
        Account Details:
        ----------------
        Account Name: $this->accountName . PHP_EOL;
        Account Number: $this->accountNumber . PHP_EOL;
        Balance: $this->balance . PHP_EOL;
        Account Type: $this->accountType->name . PHP_EOL;
        ";
    }

    // deposit method to deposit money
    public function deposit( float $amount ): BankAccount {
        $this->balance += $amount;

        return $this;
    }

    // withdraw method to withdraw money
    public function withdraw( float $amount ): BankAccount {
        if( ! $this->isSufficientBalance($amount)) {
            echo "Insufficient balance." . PHP_EOL;
            return $this;
        }
        $this->balance -= $amount;

        return $this;
    }

    // getBalance method to get the current balance
    public function getBalance(): float {
        return $this->balance;
    }

    // isSufficientBalance method to check if the balance is sufficient for withdrawal
    private function isSufficientBalance(float $amount): bool
    {
        if( ($this->balance - 100) < $amount ) {
            return false;
        }

        return true;
    }

    // transfer method to transfer money to another account
    public function transfer( BankAccount $toAccount, float $amount): BankAccount {
        if( ! $this->isSufficientBalance($amount)) {
            echo "Insufficient balance to $this->accountNumber" . PHP_EOL;
            return $this;
        }

        $this->withdraw($amount);
        $toAccount->deposit($amount);

//        echo "Balance transferred from $this->accountNumber to $toAccount->accountNumber. Current Balance Of $this->accountNumber is : $this->balance" . PHP_EOL;

        return $this;
    }

    public function showBalance(): BankAccount {
        echo "Current Balance: $this->balance" . PHP_EOL;
        return $this;
    }
}

