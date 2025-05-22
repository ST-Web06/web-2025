<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Данные из JSON</title>
    <link href="styles.css" rel="stylesheet">
    <?php
        $posts_json = file_get_contents('posts.json');
        $users_json = file_get_contents('posts.json');
        $users = json_decode($users_json, true);
        $posts = json_decode($posts_json, true); 
    ?>
</head>
<body>
    <h1>Список пользователей</h1>
    
    <?php    
    // Проверяем, есть ли данные
    if ($users && is_array($users)) {
        foreach ($users as $user) {
            if ($user['id'] === 1){
                foreach ($posts as $post){
                    if ($post['id'] === 1){
                        echo '<div class="post">'
                        echo '<img scr = "' . $post['image'] . '"'
                    }
                }
            }
            
            if (!empty($user['skills'])) {
                echo '<div class="skills-list">';
                foreach ($user['skills'] as $skill) {
                    echo '<span class="skill">' . htmlspecialchars($skill) . '</span>';
                }
                echo '</div>';
            }
            
            echo '</div>';
        }
    } else {
        echo '<p>Данные не найдены или файл поврежден</p>';
    }
    ?>
</body>
</html>