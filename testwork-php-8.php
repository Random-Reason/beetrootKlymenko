<?php
session_start();

if(isset($_SESSION['views'])) {
    $_SESSION['views'] = $_SESSION['views']+ 1;
    $res = "Вы обновляли страницу " . $_SESSION['views']. " раза. ";
} else {
    $_SESSION['views'] = 1;
    $res = "Вы еще не обновляли страницу";
}
echo $res;
?>