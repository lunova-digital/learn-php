# PHP Output, Comments, and Embedding – Documentation

This document provides a complete guide to the different ways of **outputting values**, **debugging data**, **commenting**, and **embedding PHP with HTML**. Examples are included with explanations of their behavior, return values, and usage patterns.

----------

## 1. Output Functions in PHP

### 1.1 `echo`

-   **Description**: Outputs one or more strings.
    
-   **Syntax**:
    
    ```php
    echo string1 [, string2, ...];
    
    ```
    
-   **Key Points**:
    
    -   Can take multiple arguments separated by commas.
        
    -   Does **not return a value**, so it cannot be used in an expression.
        
    -   Slightly faster than `print`.
        

**Example**:

```php
$firstName = 'Rabin';
$lastName = 'Khan';

echo $firstName, $lastName, ' is learning PHP.';
// Output: RabinKhan is learning PHP.

```

----------

### 1.2 `print`

-   **Description**: Outputs a string, similar to `echo`.
    
-   **Syntax**:
    
    ```php
    print string;
    
    ```
    
-   **Key Points**:
    
    -   Accepts only **one argument**.
        
    -   Always returns `1`, making it usable in expressions.
        
    -   Slightly slower than `echo`.
        

**Example**:

```php
if (print "Hello World" === 1) {
    echo " → This runs because print returns 1";
}

```

**Another Example**:

```php
echo print "Hello World";
// Output: Hello World1

```

----------

### 1.3 `print_r`

-   **Description**: Prints human-readable information about a variable.
    
-   **Best for**: Arrays and objects.
    
-   **Key Points**:
    
    -   More compact and user-friendly than `var_dump`.
        
    -   Useful for debugging but not as detailed.
        

**Example**:

```php
$details = ['Rabin', 'Khan', 24, 'Kathmandu'];

echo '<pre>';
print_r($details);
echo '</pre>';

```

**Output**:

```
Array
(
    [0] => Rabin
    [1] => Khan
    [2] => 24
    [3] => Kathmandu
)

```

----------

### 1.4 `var_dump`

-   **Description**: Dumps detailed information about a variable, including type and length.
    
-   **Best for**: Debugging complex variables.
    
-   **Key Points**:
    
    -   Provides more detail than `print_r`.
        
    -   Commonly used in development, rarely in production.
        

**Example**:

```php
$details = ['Rabin', 'Khan', 24, 'Kathmandu'];

echo '<pre>';
var_dump($details);
echo '</pre>';

```

**Output**:

```
array(4) {
  [0]=> string(5) "Rabin"
  [1]=> string(4) "Khan"
  [2]=> int(24)
  [3]=> string(9) "Kathmandu"
}

```

----------

### 1.5 `sprintf`

-   **Description**: Returns a **formatted string** (does not output directly).
    
-   **Syntax**:
    
    ```php
    sprintf(format, values...)
    
    ```
    
-   **Key Points**:
    
    -   Unlike `printf`, it does not print — it only returns the string.
        
    -   Useful for storing formatted strings in variables.
        

**Example**:

```php
$formatted = sprintf('My name is %s %s and I am %d years old.', 'Rabin', 'Khan', 24);
echo $formatted;

```

**Output**:

```
My name is Rabin Khan and I am 24 years old.

```

----------

## 2. Comments in PHP

PHP supports multiple comment styles, influenced by C, C++, and Unix shell (Perl) syntax.

-   **Single-line comments**:
    
    ```php
    // This is a single-line comment
    # Another single-line comment
    
    ```
    
-   **Multi-line comments**:
    
    ```php
    /* This is a multi-line comment
       that can span multiple lines */
    
    ```
    

**Purpose of Comments**:

-   Explain logic or intent of the code.
    
-   Improve readability for future developers.
    
-   Comments are ignored by the interpreter.
    

----------

## 3. Embedding PHP with HTML

PHP can be embedded directly into HTML using multiple syntaxes.

### 3.1 Standard Syntax

```php
<?php
$name = "Faruk";

if ($name === "Faruk") {
    echo "<h1>Hello I am coming from HTML inside PHP</h1>";
}
?>

```

### 3.2 Alternative Syntax (for templates)

```php
<?php if ($name === "Faruk") { ?>
    <h1>Hello I am coming from HTML inside PHP using alternative syntax</h1>
    <h2>I am 24 years old</h2>
    <h3>I live in Kathmandu</h3>
<?php } ?>

```

### 3.3 Short Echo Tag

```php
<?= "Hello from shorthand syntax"; ?>

```

Equivalent to:

```php
<?php echo "Hello from shorthand syntax"; ?>

```

----------

## 4. Instruction Separators in PHP

-   PHP statements are terminated with `;` (semicolon).
    
-   Exception: The **last statement in a PHP block before closing `?>`** does not require `;`.
    

**Example**:

```php
echo "Hello World"
// Works fine if this is the last line before closing tag
?>

```

----------

## 5. Key Takeaways

1.  Use `echo` for simple, fast output.
    
2.  Use `print` if you need an expression that returns a value.
    
3.  Use `print_r` for quick inspection of arrays/objects.
    
4.  Use `var_dump` for detailed debugging.
    
5.  Use `sprintf` for formatted string construction.
    
6.  Comments are ignored during execution but are essential for maintainable code.
    
7.  PHP can be seamlessly embedded within HTML using standard, alternative, or shorthand syntax.
    
8.  Remember that `;` separates instructions, but the final semicolon is optional if it’s the last statement before `?>`.
