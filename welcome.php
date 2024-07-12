<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: gray; margin: 0; padding: 0;">
    <div class="container"
        style="max-width: 800px; margin: auto; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <h1 style="color: #333; text-align: center; margin-bottom: 20px;">
            Welcome, <?php echo htmlspecialchars($_SESSION['firstname']); ?>!
        </h1>
        <p style="text-align: center; font-size: 18px; color: #555;">
            You have successfully logged in.
        </p>
        <div style="text-align: center; margin-top: 20px;">
            <a href="index.html"
                style="text-decoration: none; color: #fff; background-color: #007bff; padding: 10px 20px; border-radius: 4px; font-size: 16px;">
                Logout
            </a>
        </div>
    </div>
</body>
<footer >
        <p>&copy; 2024 PSCA Project. All rights reserved.</p>
    </footer>
</html>