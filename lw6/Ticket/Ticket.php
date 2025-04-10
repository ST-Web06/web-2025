<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $firstTicket = (int)($_POST['firstTicket']);
        $secondTicket = (int)($_POST['secondTicket']);
        if ($firstTicket > $secondTicket) {
            $bufer = $secondTicket;
            $secondTicket = $firstTicket;
            $firstTicket = $bufer;
        }
        if ($firstTicket === $secondTicket) {
            echo 'Нет счасливых билетов';
        }
        while ($firstTicket != $secondTicket) {
            $data_ar = str_split($firstTicket);
            $i = 0;
            $sum = 0;
            foreach ($data_ar as $num) {
                if ($i < 3) {
                    $sum += $num;
                } else {
                    $sum -= $num;
                }
                $i++;
            }
            if ($sum == 0){
                echo $firstTicket . ' ';
            }
            $firstTicket++;
        }

    }
?>