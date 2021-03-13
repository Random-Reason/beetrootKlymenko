<?php
    setcookie('name', time() + 3600);
    if (!isset($_COOKIE['name'])) {
        echo "Привет, новичок!";
    } else {
       echo "С возвращением!";
    }
?>
