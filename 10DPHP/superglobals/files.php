<?php
echo '<pre>';
print_r($_FILES);
echo '</pre>';
if (isset($_POST['submit'])) {
    echo "Your name is <span style='color:red'>$_POST[name]</span> and your email is <span style='color:red'>$_POST[email]</span>.";
}
?>

<form action="index.php" method="post" enctype="multipart/form-data">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <label for="name">Email:</label>
    <input type="email" id="email" name="email" required>
    <input type="file" id="email" name="image" required>
    <input type="submit" value="Submit" name="submit">
</form>

