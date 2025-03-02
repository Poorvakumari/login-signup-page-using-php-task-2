<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// If logged in, get user details
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="dashboard-page">

<!-- Navigation Bar -->
<header class="dashboard-header">
    <div class="logo">
        <img src="images/logo.jpg" alt="Car World Logo">
        <h2>Car World</h2>
    </div>
    <div class="user-info">
        <i class="fas fa-user-circle"></i>
        <span><?php echo htmlspecialchars($username); ?></span>
        <a href="logout.php" class="logout-btn">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
    </div>
</header>

<!-- Welcome Section -->
<section class="dashboard-content">
    <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
    <p>Explore your dashboard and manage your account.</p>

    <!-- Dashboard Cards -->
    <div class="dashboard-cards">
        <div class="card">
            <i class="fas fa-car"></i>
            <h3>Your Cars</h3>
            <p>Manage your favorite cars.</p>
        </div>
        <div class="card">
            <i class="fas fa-cogs"></i>
            <h3>Settings</h3>
            <p>Customize your preferences.</p>
        </div>
        <div class="card">
            <i class="fas fa-envelope"></i>
            <h3>Messages</h3>
            <p>Check your latest notifications.</p>
        </div>
    </div>
</section>

</body>
</html>
