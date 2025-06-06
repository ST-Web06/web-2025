<?php
    require_once 'makePost.php';
    require_once '../database.php';
    
    $dbdata = connectDatabase();
    $users = array_values(getUsers($dbdata));
    $posts = array_values(getPosts($dbdata));
    $images = array_values(getImages($dbdata));

    $filterByUserId = $_GET['id'] ?? null;

    $isValidUser = $filterByUserId ? in_array($filterByUserId, array_column($users, 'id')) : false;   
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Главная</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <div class="content">
        <div class="menu">
            <a href="../home">
                <img class="menu__sidebarIcon menu__sidebarIcon--active" src="../image/homeIm.png" alt="иконка домой">
            </a>
            <a href="../profile/?id=<?php echo $users[0]['id'] ?>">
                <img class="menu__sidebarIcon" src="../image/my_account.svg" alt="иконка профиля">
            </a>
            <img class="menu__sidebarIcon" src="../image/plusIm.png" alt="иконка добавить">
        </div>
        <div class="container">  
        <?php            
            foreach ($posts as $post) {
                $user_data = $users[array_search($post["author_id"], array_column($users, "id"))];
                $images_data = $images[array_search($post["id"], array_column($images, "post_id"))];
                if (!$filterByUserId || !$isValidUser || $user_data['id'] == $filterByUserId) {
                    makePost($post, $user_data);
                }
            }
        ?>    
        </div>
    </div>
</body>
</html>