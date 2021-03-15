<?php
session_start();
if (!$_SESSION['Alina']) {
    header("Location: login.php");
    echo "Нет доступа, залогиньтесь";
    exit;
} echo "Вы авторизованы!";
    if($_GET['do'] == 'logout'){
        unset($_SESSION['Alina']);
        session_destroy();
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Алине надо выйти</title>
</head>
<body>
<a href="login.php?do=logout">Logout</a>
</body>
</html>

