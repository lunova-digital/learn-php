<?php

$name = 'Faruk';

if ($name === 'Faruk') {
    echo '<h1> Hello I am coming from html inside php </h1>';
}
?>

<?php
?>


<?php
// Escaping from html to php using alternative syntax
if ($name === 'Faruk') { ?>
<h1> Hello I am coming from html inside php using alternative syntax </h1>
<h2> I am 24 years old </h2>
<h3> I live in Kathmandu </h3>
<?php } ?>
