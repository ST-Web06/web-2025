<?php

$input = $_POST["poland"];
$input = explode(" ", $input);
$data_ar = [];
foreach ($input as $element)
{
    if (is_numeric($element))
        array_push($data_ar, $element);
    else
    {
        $secNum = array_pop($data_ar);
        $firstNum = array_pop($data_ar);
        switch ($element)
        {   
            case "+":
                array_push($data_ar, $firstNum + $secNum);
                break;
            case "-":
                array_push($data_ar, $firstNum - $secNum);
                break;
            case "*":   
                array_push($data_ar, $firstNum * $secNum);
                break;
        }
    }
}
echo array_pop($data_ar);

?>
