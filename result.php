<?php
session_start();
$answer1 = $_SESSION['ans1'];
$answer2 = $_SESSION ['ans2'];
$answer3 = $_POST ['ans3'];


if ($answer1 == 4 && $answer2 == 6 && $answer3 == 8) {
    echo "Ваш результат +";
} else {
    echo "Ваш результат -";
}
?>


