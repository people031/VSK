<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION["user"]; ?>!</h1>
    <p>This is an empty page. You can update it later.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
