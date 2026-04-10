<?php
if (isset($_POST['submit'])) {
    print_r($_REQUEST);
    echo "Your name is <span style='color:red'>$_POST[name]</span> and your email is <span style='color:red'>$_POST[email]</span>.";
}
?>

<form action="post.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <label for="name">Email:</label>
    <input type="email" id="email" name="email" required>
    <input type="submit" value="Submit" name="submit">
</form>

