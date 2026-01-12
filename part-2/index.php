<?php

class Example {
    public string $name;

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

$example = new Example();
$example->setName('S362');
print $example->getName() . PHP_EOL;

$example2 = new Example();
$example2->setName('O597');
print $example2->getName() . PHP_EOL;

