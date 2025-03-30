<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data = explode('.', $_POST['sign']);
        if ((20 < (int)$data[0]) and ((int)$data[1] == 3) or (21 > (int)$data[0]) and ((int)$data[1] == 4)) {
            echo 'Овен';
        }
        if ((20 < (int)$data[0]) and ((int)$data[1] == 4) or (21 > (int)$data[0]) and ((int)$data[1] == 5)) {
            echo 'Телец';
        }
        if ((20 < (int)$data[0]) and ((int)$data[1] == 5) or (21 > (int)$data[0]) and ((int)$data[1] == 6)) {
            echo 'Близнецы';
        }
        if ((20 < (int)$data[0]) and ((int)$data[1] == 6) or (21 > (int)$data[0]) and ((int)$data[1] == 7)) {
            echo 'Рак';
        }
        if ((20 < (int)$data[0]) and ((int)$data[1] == 7) or (21 > (int)$data[0]) and ((int)$data[1] == 8)) {
            echo 'Лев';
        }
        if ((20 < (int)$data[0]) and ((int)$data[1] == 8) or (21 > (int)$data[0]) and ((int)$data[1] == 9)) {
            echo 'Дева';
        }
        if ((20 < (int)$data[0]) and ((int)$data[1] == 9) or (21 > (int)$data[0]) and ((int)$data[1] == 10)) {
            echo 'Весы';
        }
        if ((20 < (int)$data[0]) and ((int)$data[1] == 10) or (21 > (int)$data[0]) and ((int)$data[1] == 11)) {
            echo 'Скорпион';
        }
        if ((20 < (int)$data[0]) and ((int)$data[1] == 11) or (21 > (int)$data[0]) and ((int)$data[1] == 12)) {
            echo 'Стрелец';
        }
        if ((20 < (int)$data[0]) and ((int)$data[1] == 12) or (21 > (int)$data[0]) and ((int)$data[1] == 1)) {
            echo 'Козерог';
        }
        if ((20 < (int)$data[0]) and ((int)$data[1] == 1) or (21 > (int)$data[0]) and ((int)$data[1] == 2)) {
            echo 'Водолей';
        }
        if ((20 < (int)$data[0]) and ((int)$data[1] == 2) or (21 > (int)$data[0]) and ((int)$data[1] == 3)) {
            echo 'Рыбы';
        }
    }        
?>