<?php
session_start(); // Start a session

// Enable error reporting for debugging (remove in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection details
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "project";

    // Create a database connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

    // Check for a successful connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform user authentication with prepared statement
    $sql = "SELECT * FROM users WHERE username = ?"; // Assuming you have a 'username' column
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) { // Assuming you've hashed passwords during registration
            // Authentication successful, set session variable and redirect
            $_SESSION["username"] = $username;
            header("Location: index2.php");
            exit;
        } else {
            // Authentication failed, display an error message or take appropriate action
            $loginError = "Authentication failed. Please check your username and password.";
        }
    } else {
        $loginError = "Authentication failed. Please check your username and password.";
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    
    <div class="login-box">
  <h2>Login</h2>
</div>
    <form action="login.php" method="post">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>

    <?php
    // Display login error message if authentication failed
    if (isset($loginError)) {
        echo '<p style="color: red;">' . $loginError . '</p>';
    }
    ?>

    <p>Not a member? <a href="register.php">Register</a></p>
</body>
</html>
