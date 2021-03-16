<?php
session_start();
if (!$_SESSION['Alina']) {
    header('HTTP/1.0 403 Forbidden');
echo 'You are forbidden!';
    exit;
};
if($_GET['do'] = "logout"){
        unset($_SESSION['Alina']);
        session_destroy();
    }
$str = $_COOKIE ["arr"];
$array = unserialize($str);
//print_r ($array);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Алине надо выйти</title>
</head>
<body>
<p>Privet!</p>
<a href="login.php?do=logout">Logout</a>
</body>
</html>

