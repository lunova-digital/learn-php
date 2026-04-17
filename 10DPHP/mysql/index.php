<?php

// Connect to the database
// $conn = mysqli_connect('localhost', 'myuser', 'acb17', 'chat_app');
$conn = new PDO('mysql:host=localhost;dbname=chat_app', 'myuser', 'acb17');

// check connection
if (! $conn) {
    exit('Connection failed: '.mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_hash = md5($password);
    $error = [];
    if (! $email) {
        $error['message'] = 'Invalid email address.';
    } else {
        $email_check_query = $conn->prepare('SELECT * FROM `users` WHERE `email` = ?');
        $email_check_query->execute([$email]);
        if ($email_check_query->rowCount() > 0) {
            $error['message'] = 'Email already exists.';
        } else {
            $insert_query = $conn->prepare('INSERT INTO `users`(`email`, `username`, `password`) VALUES (?,?,?)');
            $success = $insert_query->execute([$email, $username, $password_hash]);
            if (! $success) {
                $error['message'] = 'Failed to create user.';
            } else {
                header('Location: index.php');
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
    <h2 class="text-2xl font-bold mb-6 text-center text-gray-700">
      Create User
    </h2>

    <?php if (! empty($error)) { ?>
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 my-3 rounded-lg relative">
          <strong class="font-bold">Error! </strong>
                <span class="block sm:inline"><?= $error['message'] ?></span>
        </div>
    <?php } ?>

    <form action="index.php" class="space-y-5" method="POST">

      <!-- Email -->
      <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">
          Email
        </label>
        <input type="email" placeholder="Enter email" name="email"
          class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
      </div>

      <!-- Username -->
      <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">
          Username
        </label>
        <input type="text" placeholder="Enter username" name="username"
          class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
      </div>

      <!-- Password -->
      <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">
          Password
        </label>
        <input type="password" placeholder="Enter password" name="password"
          class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
      </div>

      <!-- Submit Button -->
      <button type="submit" name="submit"
        class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition">
        Submit
      </button>

    </form>
  </div>

</body>
</html>
























