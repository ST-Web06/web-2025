<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $year = (int)$_POST['year'];
        if (($year % 4 === 0) and ($year % 100 !== 0) or ($year % 400 === 0)){
            echo 'YES';
        } else {
            echo 'NO';
        }
    }
?>