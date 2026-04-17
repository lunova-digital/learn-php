<?php

$conn = new PDO('mysql:host=localhost;dbname=chat_app', 'myuser', 'acb17');

if ($conn) {
    echo 'Connection successful.';
} else {
    exit('Connection failed: '.mysqli_connect_error());
}
