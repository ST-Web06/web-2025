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
                    
                    echo '<div class="content">';
                    echo '<div class="user">';
                    echo '<img class="avatar" src="images/avatar' . '.png} " alt="Аватар" />';
                    echo $post['content'];
                    break;
                }
            } 
    }   
    

// <div class="content">
//         <div class="user">
//             <img class="avatar" src="images/avatarIvan.png" alt="Аватар Ивана" />
//             <span class="name">Ваня Денисов</span>
//             <img class="edit" src="images/Edit.png" alt="edit" />
//         </div>
       
//         <div class="post">
//             <img class="postImage" src="images/ivanPostImage.png" />
//             <div class="likes">
//                 <img class="like" src="images/heart.png" alt="like" />
//                 <span class="subLike">203</span>
//             </div>
//             <span class="description">
//                 Так красиво сегодня на улице! Настоящая зима)) Вспоминается 
//                 Бродский: «Поздно ночью, в уснувшей долине, на самом дне, в гор...»
//             </span>
//             <p><span class="more">ещё</span></p>
//             <p><span class="time">2 часа назад</span></p>
//         </div>



    ?>
</body>
</html>