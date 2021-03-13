<?php
    setcookie('lastVisit', date("F j, Y, g:i a"));
    if (isset($_COOKIE['lastVisit'])) {
        $str = "You were here at " . $_COOKIE['lastVisit'];
    } else {
        $str = "This is your first time";
    };
    echo $str;
?>


