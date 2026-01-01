# PHP Documentation: Control Structures, Match, Include/Require

## 1. `declare(strict_types=1)`

The `declare(strict_types=1)` directive enables strict type checking for scalar type declarations.  
When enabled, PHP will throw a `TypeError` if the provided argument types don’t match the function signature exactly.

Example:

```php
<?php
declare(strict_types=1);

function add(int $a, int $b): int {
    return $a + $b;
}

echo add(5, 15);  // Works fine → 20
echo add("5", "15"); // TypeError in strict mode

```

---

## 2. `if`, `elseif`, `else`

The `if` control structure executes code only if a condition evaluates to `true`. Optional `elseif` and `else` clauses provide alternatives.

Example: Basic comparison

```php
<?php
$a = 20;
$b = 30;

if ($a > $b) {
    echo "$a is greater than $b";
} elseif ($a < $b) {
    echo "$a is less than $b";
} else {
    echo "$a is equal to $b";
}
// Output: 20 is less than 30

```

Example: With HTML output

```php
<?php
$premium_1 = 150;
$premium_2 = 250;
$premium_3 = 350;

$user_balance = 200;

if ($user_balance >= $premium_3) {
    echo '<h1>Welcome to Premium 3</h1>';
} elseif ($user_balance >= $premium_2) {
    echo '<h1>Welcome to Premium 2</h1>';
} elseif ($user_balance >= $premium_1) {
    echo '<h1>Welcome to Premium 1</h1>';
} else {
    echo '<h1>Welcome to Free Plan</h1>';
}

```

---

## 3. `for` Loops

The `for` loop repeats a block of code a specified number of times.

Example: Print odd numbers

```php
<?php
for ($i = 1; $i <= 10; $i += 2) {
    echo $i . ",";
}
// Output: 1,3,5,7,9,

```

Example: Using `break`

```php
<?php
for ($i = 1; $i <= 10; $i += 2) {
    if ($i == 5) {
        break;
    }
    echo $i . ",";
}
// Output: 1,3,

```

---

## 4. `foreach` Loops

The `foreach` loop iterates over arrays.

Example:

```php
<?php
$users = [
    ['name' => 'John', 'age' => 25],
    ['name' => 'Jane', 'age' => 30],
];

foreach ($users as $user) {
    echo 'Name: '.$user['name'].', Age: '.$user['age'].'<br/>';
}
// Output:
// Name: John, Age: 25
// Name: Jane, Age: 30

```

---

## 5. `switch`

The `switch` statement compares a variable against multiple cases.

Example:

```php
<?php
$day = date('D');

switch ($day) {
    case 'Mon':
        echo 'Today is Monday';
        break;
    case 'Tue':
        echo 'Today is Tuesday';
        break;
    default:
        echo 'Other day';
}

```

---

## 6. `match` Expression (PHP 8+)

The `match` expression is similar to `switch` but:

- Returns a value.
- Requires exact matches.
- No `break` needed.

Example: Day of week

```php
<?php
$day = 'Thu';

$output = match ($day) {
    'Mon' => 'Today is Monday',
    'Tue' => 'Today is Tuesday',
    'Thu' => 'Today is Thursday',
    default => 'Invalid day',
};

echo $output;
// Output: Today is Thursday

```

Example: Complex return values

```php
<?php
$combination = match ('Thu') {
    'Thu' => [
        'color' => '#FF33A8',
        'activity' => 'Team lunch',
    ],
    default => [
        'color' => '#FFFFFF',
        'activity' => 'Nothing planned',
    ],
};

echo "<p style='background:{$combination['color']};color:#fff;'>{$combination['activity']}</p>";

```

---

## 7. File Inclusion: `include`, `require`, `include_once`, `require_once`

File inclusion statements allow you to load and reuse external PHP files.

- `include` emits a warning if the file is not found, but execution continues.
- `require` throws a fatal error if the file is not found, stopping execution.
- `include_once` behaves like `include`, but ensures the file is included only once.
- `require_once` behaves like `require`, but ensures the file is included only once.

Example:

```php
<?php
include 'class_hello.php';       // Warning if missing
require 'class_goodbye.php';     // Fatal error if missing
include_once 'class_hello.php';  // Prevents duplicate inclusion
require_once 'class_goodbye.php';// Fatal if missing, but once only

```
