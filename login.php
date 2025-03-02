<?php
include "config.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_or_username = $_POST["email_or_username"];
    $password = $_POST["password"];

    // Sanitize input
    $email_or_username = filter_var($email_or_username, FILTER_SANITIZE_STRING);

    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE email = ? OR username = ?");
    $stmt->bind_param("ss", $email_or_username, $email_or_username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $username, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            // Regenerate session ID to prevent session fixation
            session_regenerate_id();
            $_SESSION["user_id"] = $id;
            $_SESSION["username"] = $username;
            header("Location: dashboard.php");
            exit;
        } else {
            $error = "Invalid credentials!";
        }
    } else {
        $error = "Invalid credentials!";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Car Website</title>
    <link rel="stylesheet" href="css/login-signup.css">
</head>
<body>
    <div class="background-container">
        <div class="form-container">
            <h2>Login</h2>
            <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
            <form action="login.php" method="POST">
                <input type="text" name="email_or_username" required placeholder="Email or Username">
                <input type="password" name="password" required placeholder="Password">
                <button type="submit">Login</button>
            </form>
            <p>Don't have an account? <a href="index.php">Sign up here</a></p>
        </div>
    </div>
</body>
</html>
