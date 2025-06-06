<?php
$users = json_decode(file_get_contents("../data/users.json"), true);
$posts = json_decode(file_get_contents("../data/posts.json"), true);
require_once 'makePost.php';

$filterByUserId = isset($_GET['id']) ? (int) $_GET['id'] : null;
var_dump($filterByUserId);

// Используем array_search для проверки существования user_id
$userKey = ($filterByUserId !== null) ? array_search($filterByUserId, array_column($users, 'user_id')) : false;
$isValidUser = $userKey !== false;

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <title>home</title>
    <link href="style-home.css" rel="stylesheet">
    <link href="../fonts/font.css" type="text/css" rel="stylesheet">
</head>

<body>
    <div class="page">
        <div class="menu">
            <a href="../home">
                <img class="menu__sidebarIcon menu__sidebarIcon--active" src="../images/homeIm.png" alt="иконка домой">
            </a>
            <a href="../profile/?id=<?php echo $users[0]['user_id'] ?>">
                <img class="menu__sidebarIcon" src="../images/userIm.png" alt="иконка профиля">
            </a>
            <img class="menu__sidebarIcon" src="../images/plusIm.png" alt="иконка добавить">
        </div>
        <div class="content">
            <?php
            foreach ($posts as $post) {
                $userKey = array_search($post["user_id"], array_column($users, "user_id"));

                if ($userKey === false) {
                    continue;
                }
                $user_data = $users[$userKey];

                if ($filterByUserId === null || $user_data['user_id'] == $filterByUserId || !$isValidUser) {
                    makePost($post, $user_data);
                }
            }
            ?>
        </div>
    </div>
</body>

</html>
