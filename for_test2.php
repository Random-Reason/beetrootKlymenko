<?php
session_start();
$answer1 = $_POST ['ans1'];
$_SESSION ['ans1'] = $answer1;
?>

<p> Вопрос 2</p>
<p> 3 + 3 = ?</p>
<form action="for_test3.php" method="post">
    <input type="text" name = "ans2" />
    <input type="submit" />
</form>