<?php
session_start();
$login = 'Alina';
$pass = '12345678';
if ($_POST['submit']) {
    if ($login == $_POST['login'] && $pass == $_POST['pass']) {
        $_SESSION['Alina'] = $login;
        header("Location: index.php");
    } else
        echo '<p>Логин или пароль неверны!</p>';
}
$_POST = array( 'login' => "$login", 'password' => "$pass");
$result = serialize($_POST);
setcookie("arr", $result, time()+60);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форма авторизации</title>
</head>
<body>
<a href='index.php'> Моя страница</a>
    <h3> Форма авторизации </h3>
    <form action="login.php" method="POST">
       <p> <label> Введите Ваш логин</label> <input name="login" required /></p>
        <p> <label> Введите Ваш пароль </label> <input name="pass" type="password" required /> </p>
        <p> <input type="submit" value="Отправить" name ="submit" /> </p>
    </form>
</body>
</html>
