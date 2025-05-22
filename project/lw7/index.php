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
                    if ($post['user_id'] === $user['id']){
                        echo '<span>ASD</span>';
                        
                    }
                }
            }
            
        //     {<div class="user">
        //     <img class="avaratIvana" src="images/avatarIvan.png" alt="Аватар Ивана" />
        //     <span class="nameIvan">Ваня Денисов</span>
        //     <img class="edit" src="images/Edit.png" alt="edit" />
        // </div>
       
        // <div class="postIvan">
        //     <img class="postImage" src="images/ivanPostImage.png" />
        //     <div class="likes">
        //         <img class="like" src="images/heart.png" alt="like" />
        //         <span class="subLike">203</span>
        //     </div>
        //     <span class="description">
        //         Так красиво сегодня на улице! Настоящая зима)) Вспоминается 
        //         Бродский: «Поздно ночью, в уснувшей долине, на самом дне, в гор...»
        //       </span>
        //     <p><span class="more">ещё</span></p>
        //     <p><span class="time">2 часа назад</span></p>
        // </div>}
        }
    } else {
        echo '<p>Данные не найдены или файл поврежден</p>';
    }
    ?>
</body>
</html>