<?php
    require_once "classes.php";

   $con = mysqli_connect('localhost', 'root', '', 'test_oop');
   $publications = array();

   if (mysqli_connect_errno()){
       echo 'fail to connect'.mysqli_connect_error();

   }

   $result = mysqli_query($con, 'SELECT * FROM publication');

while ($row = mysqli_fetch_array($result)) {
    if ($row['type'] === 'ArticlePublication') {
        $publications[] = new ArticlePublication($row ['id'], $row ['title'], $row['date']);
    } elseif ($row['type'] === 'NewsPublication') {
        $publications[] = new NewsPublication($row ['id'], $row ['title']);
    }
}





