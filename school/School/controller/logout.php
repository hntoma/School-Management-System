<?php
// session_start();
// if (!isset($_COOKIE['flag'])) {
//     header('location: login.php');
// }

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["action"] == "logout") {
    setcookie('flag', false, time() - 3600, '/');
    setcookie('name', "", time() - 3600, '/');
    setcookie('username', "", time() - 3600, '/');
    setcookie('password', "", time() - 3600, '/');
    header('location: ../view/login.php');
}
