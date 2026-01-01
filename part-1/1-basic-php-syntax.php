<?php
// <?php to start wrtiting PHP code
// to end PHP code write?>

<!--- We can write HTML code outside the PHP tags--->
<!Doctype html>
<html>
<head>
    <title>Basic PHP Syntax</title>
</head>
<body>
    <h1>Basic PHP Syntax Example</h1>
    <?php echo 'I am from php<br/>'; // php inside html?>
</body>
</html>

<!--- Now we will write only php code so we don't need close php tag--->
<?php
// echo vs print, echo basically nothing return but print return 1
echo print 'Hello from print'; // Output: Hello from print1
echo '<br/>';
$x = print 'Hello'; // Output: Hello again
echo $x; // Output: 1
echo '<br/>';

$firstname = 'Rafiq';
$lastname = 'Uddin';

echo $firstname.' '.$lastname; // Concatenation using .;
echo '<br/>';

echo $firstname , ' ', $lastname; // Concatenation using ,;
echo '<br/>';

echo "$firstname $lastname"; // Variable parsing in double quotes
echo '<br/>';

echo "{$firstname} {$lastname}"; // Complex syntax for variable parsing
echo '<br/>';

echo '$firstname $lastname'; // No variable parsing in single quotes
echo '<br/>';
