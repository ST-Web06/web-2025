<?php
function factorial(int $num):int{
    if ($num == 1) {
        return $num;
    }
    return $num * factorial($num-1); 
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = ($_POST['num']);
        echo factorial($num);
    }
?>