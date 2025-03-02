<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Password validation
    $error = "";
    if ($password !== $confirm_password) {
        $error = "Passwords do not match!";
    } elseif (strlen($password) < 8 ||
              !preg_match("/[A-Z]/", $password) ||
              !preg_match("/[a-z]/", $password) ||
              !preg_match("/[0-9]/", $password) ||
              !preg_match("/[\W_]/", $password)) {
        $error = "Password must be 8+ characters with uppercase, lowercase, number, and special characters.";
    } else {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $hashed_password);

        if ($stmt->execute()) {
            header("Location: login.php?signup=success");
            exit;
        } else {
            $error = "Error: " . $stmt->error;
        }
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Car Website</title>
    <link rel="stylesheet" href="css/login-signup.css">
</head>
<body>
    <div class="background-container">
    <div class="form-container">
        <h2>Signup</h2>
        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
        <form action="signup.php" method="POST">
            <input type="text" name="username" required placeholder="Username">
            <input type="email" name="email" required placeholder="Email">
            <input type="password" name="password" required placeholder="Password">
            <input type="password" name="confirm_password" required placeholder="Confirm Password">
            <button type="submit">Sign Up</button>
        </form>
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
    </div>
</body>
</html>
