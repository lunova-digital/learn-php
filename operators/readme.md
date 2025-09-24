# PHP Documentation: Expressions, Statements, and Operators

## 1. `dd()` Function (Custom Debug Helper)

The `dd` (dump and die) function is commonly used in frameworks like Laravel to quickly inspect variables.  
Here, a simplified version is defined manually.

Example:

```php
<?php
function dd(...$vars)
{
    echo '<pre>';
    foreach ($vars as $var) {
        var_dump($var);
        echo '<br />';
    }
    echo '</pre>';
}

```

Usage:

```php
$a = 10;
$b = 20;
dd($a, $b);

```

This will output the contents of `$a` and `$b` in a readable format.

---

## 2. Expressions and Statements

An **expression** is anything that has a value (e.g., `2 + 3`, `$a == $b`).  
A **statement** is a complete line of code that performs an action (e.g., `echo "Hello";`, `if (...) { ... }`).

Example:

```php
echo 'Hello world!'; // Statement

```

```php
if ($a == $b) {       // Expression inside condition
    echo 'a is equal to b'; // Statement
} else {
    echo 'a is not equal to b'; // Statement
}

```

---

## 3. Operator Precedence

Operator precedence determines the order in which operators are evaluated.  
For example, multiplication has higher precedence than addition.

Example:

```php
$a = 2 + 3 * 4; // Evaluates as 2 + (3 * 4) = 14

```

---

## 4. Arithmetic Operators

Arithmetic operators are used for basic math.

- `+` addition
- `-` subtraction
- `*` multiplication
- `/` division
- `%` modulus (remainder)

Example:

```php
$a = 10;
$b = 3;

$sum = $a + $b;        // 13
$difference = $a - $b; // 7
$product = $a * $b;    // 30
$quotient = $a / $b;   // 3.3333
$modulus = $a % $b;    // 1

dd($sum, $difference, $product, $quotient, $modulus);

```

---

## 5. Assignment Operators

Assignment operators assign values to variables.  
Compound operators combine assignment with another operation.

- `=` basic assignment
- `+=` add and assign
- `-=` subtract and assign
- `*=` multiply and assign
- `/=` divide and assign
- `%=` modulus and assign

Example:

```php
$a = 10;
dd($a);  // 10

$a += 10; // 20
$a -= 5;  // 15
$a *= 10; // 150
$a /= 5;  // 30
$a %= 6;  // 0

dd($a);

```

---

## 6. Comparison Operators

Comparison operators are used to compare values.

- `==` equal (values only)
- `!=` not equal
- `===` identical (values and type)
- `!==` not identical
- `<`, `>`, `<=`, `>=`

Example:

```php
$a = 10;
$b = '10';
$c = 20;

dd($a == $b);   // true
dd($a === $b);  // false
dd($a != $c);   // true
dd($a !== $b);  // true
dd($a < $c);    // true
dd($a > $c);    // false
dd($a <= $b);   // true
dd($a >= $b);   // true

```

---

## 7. Logical Operators

Logical operators combine conditions.

- `&&` and (true if both are true)
- `||` or (true if at least one is true)
- `!` not (true if condition is false)

Example:

```php
$a = 10;
$b = 20;

dd($a < 15 && $b > 15); // true
dd($a < 15 || $b < 15); // true
dd(!($a < 15));         // false

```

---

## 8. Increment and Decrement Operators

- `++` increment (add 1)
- `--` decrement (subtract 1)
- Can be pre (`++$a`) or post (`$a++`).

Example:

```php
$a = 20;
$a++;  // 21
dd($a);

$a--;  // 20
dd($a);

--$a;  // 19
dd($a);

```

---

## 9. String Operators

- `.` concatenation
- `.=` append to existing string

Example:

```php
$firstName = 'John';
$lastName = 'Doe';

$fullName = $firstName . ' ' . $lastName; // John Doe
dd($fullName);

$fullName .= ' is a developer.'; // John Doe is a developer.
dd($fullName);

```

---

## 10. Array Operators

Array operators compare or merge arrays.

- `+` union
- `==` equal (same keys and values, order not considered)
- `===` identical (same keys, values, and order)
- `!=` not equal
- `!==` not identical

Example:

```php
$array1 = ['a' => 'apple', 'b' => 'banana'];
$array2 = ['b' => 'banana', 'c' => 'cherry'];

$union = $array1 + $array2;
dd($union); // ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry']

dd($array1 == $array2);  // false
dd($array1 === $array2); // false
dd($array1 != $array2);  // true
dd($array1 !== $array2); // true

```
