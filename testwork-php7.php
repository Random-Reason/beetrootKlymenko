<?php
if (!empty($_POST['birthday'])){
    setcookie('birthday', $_POST['birthday']);
   $result = "Твой день рождения ".  $_COOKIE['birthday'];
    $birthday = strtotime($_COOKIE['birthday']);
    $addDate = strtotime(date('d-m', $birthday) . '-' . date('Y', time()));
        if (date('d-m', $birthday) === date('d-m', time())) {
            echo "<h3><br>Happy Birthday!<br></h3>";
        }
            elseif ($addDate < time()) {
                $addDate = strtotime('+ 1 year',$addDate);
                $days = floor(($addDate - time())/(60*60*24))+1;
                echo "До твоего дня рождения $days дня (дней) <br>";
                }
                elseif ($addDate > time()) {
                    $days = floor(($addDate - time())/(60*60*24))+1;
                    echo "До твоего дня рождения $days дня (дней) <br>";
                }
                    } else {
                        $result = sprintf(
                            "<form action='testwork-php7.php' method='post'>
                            <p>Когда у тебя день рождения?</p>
                            <input type='date' name='birthday'/>
                            <input type='submit'/>
                                    </form>");
                    };
echo $result;
echo "<br>";

?>
