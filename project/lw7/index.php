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
    foreach ($posts as $post) {
            // Находим пользователя для этого поста
            $user = null;
            foreach ($users as $u) {
                if ($u['id'] == $post['user_id']) {
                    $user = $u;
                    echo '<span>|Post has founded| </span>';
                    break;
                }
            } 
    }   
    
    ?>
</body>
</html>