<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Rental Mobil</title>
</head>
<body>
    <h1>Selamat Datang, <?php echo htmlspecialchars($username); ?>!</h1>
    <p>Anda berhasil login ke sistem rental mobil.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
