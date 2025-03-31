<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data = explode(' ', ($_POST['data']));
        $data_ar = [];
        foreach ($data as $sym) {
            if ($sym == '+' or $sym == '-' or $sym == '/' or $sym == '*'){
                switch($sym){
                    case '+':
                    	$res = 0;
                        foreach ($data_ar as $num){
                        	$res += $num;
                        }
                        break;
                    case '-':
                    	$res = $data_ar[0] * 2;
                        foreach ($data_ar as $num){
                        	$res -= $num;
                        }
                        break;
                    case '*':
                    	$res = 1;
                        foreach ($data_ar as $num){
                            $res *= $num;
                        }
                        break;
                    case '/':
                    	$res = $data_ar[0] * $data_ar[0];
                        foreach ($data_ar as $num){
                            $res /= $num;
                        }
                        break;
                }
                $data_ar = [$res];
            } else {
                array_push($data_ar, (int)$sym);
            }
        }
        echo $data_ar[0];
    }
?> 