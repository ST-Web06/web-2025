<?php
$users = json_decode(file_get_contents("../data/users.json"), true);
$posts = json_decode(file_get_contents("../data/posts.json"), true);
require_once 'makeProfile.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header('Location: ../home');
    exit();
}

foreach ($users as $user) {
    if ($user['user_id'] == $id) {
        $user_data = $user;
    }
}

if ($user_data == null) {
    header('Location: ../home');
    exit();
}
$user_posts = array_values(array_values(array_filter($posts, fn($post) => $post['user_id'] == $id)));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Profile</title>
    <link href="style-profile.css" rel="stylesheet">
    <link href="fonts/font.css" type="text/css" rel="stylesheet">
</head>

<body>
    <div class="content">

        <div class="menu">
            <a href="../home"><img class="menu__sidebarIcon menu__sidebarIcon--active" src="../images/homeIm.png"
                    alt="Иконка домашней страницы" /> </a>
            <a href="../profile"><img class="menu__sidebarIcon" src="../images/userIm.png" alt="Иконка профиля"> </a>
            <img class="menu__sidebarIcon" src="../images/plusIm.png" alt="Сделать пост">
        </div>
        <?php makeProfile($user_posts, $user_data); ?>
    </div>
</body>

</html>