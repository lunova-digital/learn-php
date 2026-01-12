<?php

enum AccountType
{
    case SAVINGS;
    case CURRENT;
}

class BankAccount {
    private int $accountNumber;
    public string $accountName;
    public AccountType $accountType;
    public float $balance;
    private array $logs = [];

    public function __construct($accountName, $balance, $accountType = AccountType::SAVINGS)
    {
        $this->isEligible($accountType, $balance);

        $this->accountName = $accountName;
        $this->accountType = $accountType;
        $this->balance = $balance;

        $this->setAccountNumber();
    }




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

    private function setAccountNumber(): void {
        $this->accountNumber = rand(100000, 999999);
    }

    public function getAccountDetails(): void {
        echo "Account Name: ", $this->accountName . PHP_EOL;
        echo "Account Number: ", $this->accountNumber . PHP_EOL;
        echo "Balance: ", $this->balance . PHP_EOL;
        echo "Account Type: ", $this->accountType->name . PHP_EOL;
    }

    public function deposit( float $amount ): void {
        $this->balance += $amount;
        $this->setLogger('deposit', 'Deposited amount : ' . $amount);
    }

    public function withdraw( float $amount ): void {
        if( ! $this->isSufficientBalance($amount)) {
            $this->setLogger('error', 'Insufficient balance amount : ' . $amount);
            echo "Insufficient balance." . PHP_EOL;
            return;
        }
        $this->balance -= $amount;
        $this->setLogger('withdrawal', 'Withdrawal amount : ' . $amount);
    }

    public function getBalance(): float {
        return $this->balance;
    }

    private function isSufficientBalance(float $amount): bool
    {
        if( ($this->balance - 100) < $amount ) {
            return false;
        }

        return true;
    }

    public function transfer( BankAccount $toAccount, float $amount): void {
        if( ! $this->isSufficientBalance($amount)) {
            echo "Insufficient balance to $this->accountNumber" . PHP_EOL;
            return;
        }

        $this->withdraw($amount);
        $toAccount->deposit($amount);

        echo "Balance transferred from $this->accountNumber to $toAccount->accountNumber. Current Balance Of $this->accountNumber is : $this->balance" . PHP_EOL;
    }
}

$account1 = new BankAccount("Faruk", 500);
//$account1->getAccountDetails();
$account1->deposit(2000);
$account1->withdraw(300);
$account1->withdraw(200.14);
echo "Current balance: ", $account1->getBalance() . PHP_EOL;

$account2 = new BankAccount("Rafiq", 1000, AccountType::CURRENT);
//$account2->getAccountDetails();
$account2->deposit(2000);
$account2->withdraw(300);
$account2->withdraw(2600);
echo "Current balance: ", $account2->getBalance() . PHP_EOL;
//$account2->withdraw(1);

$account1->transfer($account2, 1500);
echo "Account 2 balance: ", $account2->getBalance() . PHP_EOL;

