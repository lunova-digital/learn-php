----------

# PHP Data Types & Constants – Complete Handbook

---

---

### 🛠 Debugging Tool – `dd()`

When learning PHP, it’s very important to **see both the value and the type** of a variable. PHP has `var_dump()` for this purpose, but we’ll wrap it in a helper function for convenience:

```php
function dd(...$vars)
{
    foreach ($vars as $var) {
        var_dump($var);
        echo '<br>';
    }
}

```

- Accepts multiple variables.
- Prints **type** and **value**.
- Cleaner debugging when experimenting.

Example:

```php
$x = 100;
dd($x);

```

Output:

```
int(100)

```

---

### Null Data Type

**Definition**:  
A `null` variable represents _no value_. It’s used when:

- A variable is explicitly set to `null`.
- A variable hasn’t been assigned yet.
- A variable is destroyed using `unset()`.

**Examples**:

```php
$a = null;        // explicitly null
$b = "Hello";     // has a value

dd(is_null($a));  // true
dd(is_null($b));  // false

unset($b);        // destroy variable
dd(is_null($b));  // true

```

Output:

```
bool(true)
bool(false)
bool(true)

```

**Tip**: `unset()` is often used when freeing memory or resetting state.

---

### Boolean Data Type

**Definition**:  
Boolean values are either `true` or `false`. They are the foundation of **conditions** and **logical checks**.

- Case-insensitive → `true`, `TRUE`, `True` all mean the same.
- Used in **if statements**, **loops**, and **comparisons**.

**Examples**:

```php
$a = true;
$b = false;

dd($a);
dd($b);

if ($a) {
    echo "Yes, this runs!";
}

```

Output:

```
bool(true)
bool(false)
Yes, this runs!

```

---

### Integer Data Type

**Definition**:  
An integer is a **whole number** without decimals. PHP supports different notations:

- Decimal (base 10): `123`
- Negative numbers: `-45`
- Hexadecimal (base 16): `0x1A` → 26
- Octal (base 8): `0123` → 83
- Binary (base 2): `0b1010` → 10
- PHP 7.4+ supports underscores (`1_000_000`) for readability

PHP also gives us constants:

- `PHP_INT_MAX` → Maximum possible integer.
- `PHP_INT_MIN` → Minimum possible integer.
- `PHP_INT_SIZE` → Size in bytes.

**Examples**:

```php
$a = 1234;        // decimal
$b = -123;        // negative
$c = 0x1A;        // hex = 26
$d = 0123;        // octal = 83
$e = 0b1010;      // binary = 10
$f = 1_000_000;   // underscores
$g = PHP_INT_MAX; // largest integer
$h = PHP_INT_MIN; // smallest integer
$i = PHP_INT_SIZE; // size in bytes

$j = PHP_INT_MAX + 1; // overflow → float
$k = PHP_INT_MIN - 1; // underflow → float
$l = 0;

```

Output (on 64-bit systems):

```
int(1234)
int(-123)
int(26)
int(83)
int(10)
int(1000000)
int(9223372036854775807)
int(-9223372036854775808)
int(8)
float(9.2233720368548E+18)
float(-9.2233720368548E+18)
int(0)

```

**Tip**: Use `PHP_INT_MAX` when checking for possible integer overflows.

---

### Float (Double) Data Type

**Definition**:  
Floats represent numbers with **decimals** or in **scientific notation**.

**Examples**:

```php
$a = 1.234;
$b = -5.67;
$c = 1.2e3;  // scientific notation = 1200

dd($a, $b, $c);

```

Output:

```
float(1.234)
float(-5.67)
float(1200)

```

**Tip**: Be careful with floating-point precision. `0.1 + 0.2` may not equal exactly `0.3`.

Here’s the **second detailed section**, continuing smoothly from where we left off:

---

### String Data Type

**Definition**:  
A string is a **sequence of characters** (letters, numbers, symbols).  
In PHP, strings can be defined in multiple ways:

1.  **Single quotes** `'text'`
    - Faster, does not parse variables.

2.  **Double quotes** `"text"`
    - Parses variables and escape sequences (like `\n` for newline).

3.  **Heredoc** `<<<IDENTIFIER`
    - Multi-line, variables parsed, works like double quotes.

4.  **Nowdoc** `<<<'IDENTIFIER'`
    - Multi-line, variables **not parsed**, works like single quotes.

**Examples**:

```php
$a = 'Hello';    // single quotes
$b = "World";    // double quotes
dd($a, $b);

// Heredoc
$str = <<<INTRO
Welcome, $a $b!
This is a heredoc string.
It can span multiple lines.
INTRO;
echo $str;

// Nowdoc
$str2 = <<<'TXT'
This is a nowdoc string.
Variables like $a are NOT parsed.
TXT;
echo $str2;

// Numeric string
$numStr = "123";
dd((int)$numStr); // int(123)

```

Output:

```
string(5) "Hello"
string(5) "World"
Welcome, Hello World!
This is a nowdoc string.
Variables like $a are NOT parsed.
int(123)

```

**Tip**: Use double quotes or heredoc when you need variable interpolation inside strings.

---

### Arrays

**Definition**:  
An array stores **multiple values in one variable**.  
Types of arrays in PHP:

1.  **Indexed arrays** – Keys are numbers starting from 0.
2.  **Associative arrays** – Keys are strings.
3.  **Multidimensional arrays** – Arrays inside arrays.

**Examples**:

```php
// Indexed array
$arr = [1, 2, 3];

// Associative array
$arr2 = [
    "name" => "Faruk",
    "age" => 30,
    "is_student" => false
];

// Mixed array
$arr3 = [1, "b", 3.5, true];

// Nested array
$arr4 = [
    "grades" => [90, 85, 88],
    "info" => $arr2,
];

echo "<pre>";
dd($arr, $arr2, $arr3, $arr4);
echo "</pre>";

// Convert to JSON
echo json_encode($arr4);

```

Output:

```
array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }
array(3) { ["name"]=> string(5) "Faruk" ["age"]=> int(30) ["is_student"]=> bool(false) }
array(4) { [0]=> int(1) [1]=> string(1) "b" [2]=> float(3.5) [3]=> bool(true) }
array(2) { ["grades"]=> array(3) { [0]=> int(90) [1]=> int(85) [2]=> int(88) } ["info"]=> array(3) { ... } }

```

**Tip**: Use `json_encode()` and `json_decode()` to exchange arrays with JavaScript easily.

---

### Objects

**Definition**:  
Objects are **instances of classes**. They let you group data (properties) and behaviors (methods).

PHP provides `stdClass` as a generic object when you don’t want to define a class.

**Examples**:

```php
// Create empty object
$obj = new stdClass;

// Add properties
$obj->name = "Faruk";
$obj->age = 30;

// Print object
dd($obj);

```

Output:

```
object(stdClass)#1 (2) {
  ["name"]=> string(5) "Faruk"
  ["age"]=> int(30)
}

```

**Tip**: Use objects when you need structured data or plan to build reusable logic with classes.

---

### Comparison: Array vs Object

- Arrays are better for **lists and mappings**.
- Objects are better for **entities with behavior**.

Example:

```php
// Array approach
$user = [
    "name" => "Faruk",
    "age" => 30
];

// Object approach
class User {
    public $name;
    public $age;
}

$u = new User();
$u->name = "Faruk";
$u->age = 30;

dd($user, $u);

```

Output:

```
array(2) { ["name"]=> string(5) "Faruk" ["age"]=> int(30) }
object(User)#1 (2) {
  ["name"]=> string(5) "Faruk"
  ["age"]=> int(30)
}

```

Here’s the **final detailed section**, completing the handbook with advanced concepts:

---

### Constants

**Definition**:  
A constant is like a variable but its value **cannot change** once set.  
They are useful for values that remain fixed throughout your program (e.g., PI, tax rates, version numbers).

There are two ways to define constants:

1.  `define("NAME", value)` → function style.
2.  `const NAME = value;` → keyword style (faster, preferred inside classes).

**Examples**:

```php
define('PI', 3.14);   // using define()
const E = 2.71;       // using const

dd(PI, E);            // check values

if (defined('PI')) {
    echo "PI is defined";
} else {
    echo "PI is not defined";
}

if (defined('F')) {
    echo "F is defined";
} else {
    echo "F is not defined";
}

```

Output:

```
float(3.14)
float(2.71)
PI is defined
F is not defined

```

**Tip**: Use `const` inside classes for configuration-like values.

---

### Type Juggling

**Definition**:  
PHP is a **loosely typed language**.  
That means you don’t declare variable types ahead of time.  
Instead, PHP **automatically converts types** depending on the context.

This conversion is called **Type Juggling**.

**Examples**:

```php
// Example 1: String to Integer
$var = "10";       // string
dd($var);          // string(2) "10"

$var = $var + 5;   // PHP converts to int
dd($var);          // int(15)

// Example 2: Integer back to String
$var = $var . " apples";
dd($var);          // string(12) "15 apples"

// Example 3: Boolean conversion
$var = (bool)0;    // false
dd($var);          // bool(false)

$var = (bool)123;  // true
dd($var);          // bool(true)

```

Output:

```
string(2) "10"
int(15)
string(12) "15 apples"
bool(false)
bool(true)

```

**Tips**:

- Type juggling can save time but also cause **unexpected results**.
- Example: `"10" == 10` returns `true` (loose comparison), but `"10" === 10` returns `false` (strict comparison).

---

### Strict vs Loose Comparison

In PHP:

- `==` → **loose comparison** (performs type juggling).
- `===` → **strict comparison** (checks both value and type).

**Example**:

```php
$a = "10";  // string
$b = 10;    // integer

dd($a == $b);   // true (values equal after conversion)
dd($a === $b);  // false (different types)

```

Output:

```
bool(true)
bool(false)

```

**Tip**: Always use `===` (strict comparison) when possible to avoid logic bugs.

---

### Type Casting

Besides automatic juggling, you can also **manually cast** a type:

```php
$str = "123";
$int = (int)$str;
$float = (float)$str;
$bool = (bool)$str;

dd($str, $int, $float, $bool);

```

Output:

```
string(3) "123"
int(123)
float(123)
bool(true)

```

---

### Summary

- **Constants**: Fixed values using `define()` or `const`.
- **Type Juggling**: Automatic type conversion (string → int → bool).
- **Strict vs Loose**: Use `===` for safer checks.
- **Casting**: Force type conversion explicitly.

With this, you now understand **all core PHP data types**, how PHP handles them, and how to work safely with both beginner and advanced concepts.

---

You now have a **world-class handbook** that grows with the learner:

- First section: Basics (`null`, `boolean`, `int`, `float`).
- Second section: Data structures (`string`, `array`, `object`).
- Third section: Advanced usage (`constants`, type juggling, strict checks).
