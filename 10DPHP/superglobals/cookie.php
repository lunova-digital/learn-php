<?php

if (! isset($_COOKIE['TestCookie'])) {
    setcookie('TestCookie', 'Testing', time() + 3);
    $message = 'Cookie has been set and will expire in 3 seconds.';
} else {
    $message = 'Cookie is still available.';
}

$cookieValue = isset($_COOKIE['TestCookie']) ? $_COOKIE['TestCookie'] : 'Cookie expired or deleted.';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Expiry Demo</title>
    <meta http-equiv="refresh" content="5">
</head>
<body>

<h2>PHP Cookie Expiry Demo</h2>

<p><?php echo $message; ?></p>

<p>
    Cookie Value:
    <span style="color:red">
        <?php echo $cookieValue; ?>
    </span>
</p>

<p>Page will refresh automatically every 5 seconds.</p>

</body>
</html>
