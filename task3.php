<?php
setcookie('visits', time() + 3600);
    if (!isset($_COOKIE['visits'])){
        $visited = 0;
    }else{
        $visited = $_COOKIE['visits'] + 1;
    }
echo "You were here $visited times";
?>