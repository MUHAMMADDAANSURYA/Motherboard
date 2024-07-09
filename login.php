<?php
session_start();

$users = [
    'user1' => 'password1',
    'user2' => 'password2'
];

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($users[$username]) && $users[$username] === $password) {
    $_SESSION['username'] = $username;
    header('Location: dashboard.php');
    exit();
} else {
    echo "<script>alert('Username atau password salah.'); window.location.href = 'index.php';</script>";
}
?>
