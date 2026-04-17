<?php
if (isset($_POST['signup'])) {
    if (! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo '<script>alert("Invalid email format!");window.location.href="index.php";</script>';
    }
    echo '<pre>';
    print_r($_POST);
    print_r($_FILES);
    echo '</pre>';

    if (! $_FILES['profile_picture']['error']) {
        $tmp_name = $_FILES['profile_picture']['tmp_name'];
        $destination = __DIR__.'/uploads/'.rand(1000, 9999).'_'.$_POST['full_name'].'_'.time();
        move_uploaded_file($tmp_name, $destination);
        echo "File uploaded successfully to: $destination\n";
    } else {
        echo "No file uploaded or there was an upload error.\n";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Modern Signup Form</title>

<style>
  * {
    box-sizing: border-box;
  }

  body {
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #667eea, #764ba2);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .form-container {
    background: rgba(255, 255, 255, 0.95);
    padding: 35px;
    border-radius: 16px;
    width: 360px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.2);
    backdrop-filter: blur(10px);
  }

  h2 {
    text-align: center;
    margin-bottom: 25px;
    color: #333;
  }

  label {
    font-size: 13px;
    margin-top: 12px;
    display: block;
    color: #555;
  }

  input, select {
    width: 100%;
    padding: 10px;
    margin-top: 6px;
    border-radius: 8px;
    border: 1px solid #ccc;
    transition: 0.3s;
  }

  input:focus, select:focus {
    border-color: #667eea;
    box-shadow: 0 0 8px rgba(102,126,234,0.3);
    outline: none;
  }

  .radio-group, .checkbox-group {
    margin-top: 10px;
  }

  .radio-group label,
  .checkbox-group label {
    display: flex;
    align-items: center;
    font-size: 13px;
    margin-top: 5px;
    cursor: pointer;
  }

  .radio-group input,
  .checkbox-group input {
    width: auto;
    margin-right: 8px;
  }

  .btn {
    width: 100%;
    padding: 12px;
    margin-top: 20px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    border: none;
    color: white;
    border-radius: 10px;
    cursor: pointer;
    font-size: 16px;
    transition: 0.3s;
  }

  .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
  }

  .footer {
    text-align: center;
    margin-top: 15px;
    font-size: 13px;
  }

  .footer a {
    color: #667eea;
    text-decoration: none;
    font-weight: 500;
  }
</style>

</head>
<body>

<div class="form-container">
  <h2>Create Account</h2>

  <form method="POST" action="index.php" enctype="multipart/form-data">

    <label>Full Name</label>
    <input type="text" name="full_name" placeholder="John Doe" required>

    <label>Email</label>
    <input type="email" name="email" placeholder="example@email.com" required>

    <label>Password</label>
    <input type="password" name="password" placeholder="Enter password" required>

    <label>Confirm Password</label>
    <input type="password" name="confirm_password" placeholder="Confirm password" required>

    <label>Select Skills</label>
    <select name="skills[]" multiple>
      <option value="html">HTML</option>
      <option value="css">CSS</option>
      <option value="javascript">JavaScript</option>
      <option value="react">React</option>
    </select>

    <!-- Radio Buttons -->
    <label>User Type</label>
    <div class="radio-group">
      <label><input type="radio" name="user_type" value="student"> Student</label>
      <label><input type="radio" name="user_type" value="developer"> Developer</label>
      <label><input type="radio" name="user_type" value="designer"> Designer</label>
    </div>

    <!-- Checkbox -->
    <label>Interests</label>
    <div class="checkbox-group">
      <label><input type="checkbox" name="interests[]" value="coding"> Coding</label>
      <label><input type="checkbox" name="interests[]" value="design"> Design</label>
      <label><input type="checkbox" name="interests[]" value="marketing"> Marketing</label>
    </div>

    <label for="profile_picture">Profile Picture</label>
    <input type="file" name="profile_picture" id="profile_picture" accept="image/*">

    <!-- Terms -->
    <div class="checkbox-group">
      <label>
        <input type="checkbox" name="terms" required>
        I agree to Terms & Conditions
      </label>
    </div>

    <button class="btn" type="submit" name="signup">Sign Up</button>

  </form>

  <div class="footer">
    Already have an account? <a href="#">Login</a>
  </div>
</div>

</body>
</html>
