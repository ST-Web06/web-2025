<?php

$dataa = [
    {
        "post_id": 1, 
        "post_author_id": 1, 
        "post_description": "Так красиво сегодня на улице! Настоящая зима)) Вспоминается Бродский: «Поздно ночью, в уснувшей долине, на самом дне, в городке, занесенном снегом по ручку двери...»", 
        "post_reactions": 203,
        "post_time": 1744230426
    }
]



$json_data = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

file_put_contents('data.json', $json_data);

echo 'Данные успешно сохранены в формате JSON';
?>