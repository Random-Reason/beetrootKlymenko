<?php
//$fp = fopen("test.txt", "a+");
//$mytext = "!"; //
//$test = fwrite($fp, $mytext);
//    if ($test) {
//        echo 'Данные в файл успешно занесены.';
//    } else {
//        echo 'Ошибка при записи в файл.';
//    }
//    fclose($fp);
$test = rename ("test.txt", "dir/test.txt");
    if ($test) {
        echo 'Файл успешно перемещен.';
    } else {
        echo 'Ошибка.';
    }


?>
