<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="register-box">
  <h2>Register</h2>
</div>
    <form action="register_process.php" method="post">
        Name: <input type="text" name="name" required><br><br>
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        Phone: <input type="text" name="phone" required><br><br>
        Address: <input type="text" name="address" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        <input type="submit" value="Register">
    </form>
    <p>Already a member? <a href="login.php">Login</a></p>
</body>
</html>
