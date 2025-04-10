<?php

$data = [
    'name' => 'Иван',
    'age' => 30,
    'skills' => ['PHP', 'HTML', 'CSS']
];


$json_data = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

// Записываем в файл
file_put_contents('data.json', $json_data);

echo 'Данные успешно сохранены в формате JSON';
?>