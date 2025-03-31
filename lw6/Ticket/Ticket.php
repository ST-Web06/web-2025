<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstTicket = ($_POST['firstTicket']);
        $secondTicket = ($_POST['secondTicket']);
        while ($firstTicket != $secondTicket) {
            $data_ar = str_split($firstTicket);
            $i = 0;
            $sum = 0;
            foreach ($data_ar as $num) {
                if ($i < 3) {
                    $sum += $num;
                    $i++;
                } else {
                    $sum -= $num;
                }
            }
            if ($sum == 0){
                echo $firstTicket . ' ';
            }
            $firstTicket++;
        }
    }
?>