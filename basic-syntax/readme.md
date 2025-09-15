I’ll now rewrite your documentation in the **style of the PHP official manual** — structured with **Definition, Description, Parameters, Return Values, Examples, Notes** for each function (`echo`, `print`, `print_r`, `var_dump`, `sprintf`).

This will feel like a real **reference manual page** while still being beginner-friendly for your students.

---

````markdown
# PHP Output Functions – Documentation

This document explains the major output and debugging functions in PHP:  
`echo`, `print`, `print_r`, `var_dump`, and `sprintf`.

---

## echo

### Description

```php
echo string1 [, string2, string3 ...]
```
````

Outputs one or more strings.

### Parameters

- **string1, string2, ...**
  One or more strings to output. Multiple strings can be separated by commas.

### Return Values

- No return value.

### Examples

```php
echo "Hello World!";

$first = "Rabin";
$last = "Khan";
echo $first, " ", $last, " is learning PHP.";
// Output: Rabin Khan is learning PHP.
```

### Notes

- `echo` is faster than `print`.
- Cannot be used as an expression because it returns nothing.

---

## print

### Description

```php
print string
```

Outputs a string.

### Parameters

- **string**
  The string to output. Only one argument allowed.

### Return Values

- Always returns `1`. This makes it usable in expressions.

### Examples

```php
print "Hello World"; // Output: Hello World

if (print "Test" === 1) {
    echo " => Condition true";
}
// Output: Test => Condition true

echo print "ABC"; // Output: ABC1
```

### Notes

- Slightly slower than `echo`.
- Always usable in conditional statements.

---

## print_r

### Description

```php
print_r(value, return = false)
```

Prints human-readable information about a variable (useful for arrays and objects).

### Parameters

- **value**
  The variable to be printed (string, array, object, etc).
- **return** (optional, default = `false`)
  If set to `true`, the output is returned instead of being printed.

### Return Values

- If `return` is `true`, returns the output as a string.
- Otherwise returns `true`.

### Examples

```php
$person = ["Rabin", "Khan", 24, "Kathmandu"];

print_r($person);
/* Output:
Array
(
    [0] => Rabin
    [1] => Khan
    [2] => 24
    [3] => Kathmandu
)
*/
```

```php
$output = print_r($person, true);
echo "Captured Output: \n" . $output;
```

### Notes

- Mainly used for debugging.
- Does not provide type or length information (use `var_dump` for that).

---

## var_dump

### Description

```php
var_dump(value1, value2, ...)
```

Dumps information about one or more variables, including type and length.

### Parameters

- **value1, value2, ...**
  The variables to be dumped.

### Return Values

- No return value.

### Examples

```php
$person = ["Rabin", "Khan", 24, "Kathmandu"];

var_dump($person);
/* Output:
array(4) {
  [0]=> string(5) "Rabin"
  [1]=> string(4) "Khan"
  [2]=> int(24)
  [3]=> string(9) "Kathmandu"
}
*/
```

### Notes

- More detailed than `print_r`.
- Best for debugging during development.

---

## sprintf

### Description

```php
sprintf(format, arg1, arg2, ...)
```

Returns a formatted string.

### Parameters

- **format**
  A string that contains placeholders.
- **arg1, arg2, ...**
  Variables to replace placeholders in the format string.

### Return Values

- Returns the formatted string (does **not** print it).

### Examples

```php
$str = sprintf("Hello %s!", "World");
echo $str; // Output: Hello World!

$name = "Rabin";
$age = 24;
echo sprintf("My name is %s and I am %d years old.", $name, $age);
// Output: My name is Rabin and I am 24 years old.
```

### Supported Placeholders

- `%s` – String
- `%d` – Integer
- `%f` – Floating point

---

# Comments in PHP

### Description

Comments are ignored by the PHP interpreter. They are used to annotate code.

### Types

```php
// Single line comment

# Another single line

/* Multi-line
   comment */
```

### Example

```php
// This is a single line comment
$name = "Faruk"; # Inline comment

/*
This is a multi-line
comment block
*/
```

---

# Embedding PHP with HTML

### Inline HTML inside PHP

```php
$name = "Faruk";

if ($name === "Faruk") {
    echo "<h1>Hello from HTML inside PHP</h1>";
}
```

### Escaping into HTML (Alternative Syntax)

```php
<?php if ($name === "Faruk") { ?>
  <h1>Hello from HTML using alternative syntax</h1>
  <h2>I am 24 years old</h2>
<?php } ?>
```

### Shorthand Syntax

```php
<?= "Hello from shorthand echo" ?>
```

---

# Comparison Table

| Function     | Returns Value | Multiple Args | Use Case                |
| ------------ | ------------- | ------------- | ----------------------- |
| **echo**     | No            | Yes           | Fast printing           |
| **print**    | 1 (always)    | No            | Conditional expressions |
| **print_r**  | String/True   | No            | Arrays/Objects output   |
| **var_dump** | No            | Yes           | Debugging with types    |
| **sprintf**  | String        | No            | Formatted strings       |

---

# Summary

- Use **echo** for fast, simple printing.
- Use **print** when you need an expression (always returns 1).
- Use **print_r** for arrays/objects in readable format.
- Use **var_dump** for debugging with type information.
- Use **sprintf** to build formatted strings.
- Use **comments** for clarity and **embed PHP with HTML** for dynamic pages.
