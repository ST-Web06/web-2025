<?php
function makeProfile(array $posts, $user)
{
    ?>
    <div class="user">
        <img class="user-profile-info" src=<?php echo "../images/" . $user['profile_avatar'] ?> alt="Аватар">
        <p class="user-profile__name"><?php echo $user['name'] ?></p>
        <p class="user-profile-info__description"><?php echo $user['description'] ?></p>
        <div class="posts-info">
            <img class="posts-info__icon-gallary" src="../images/miniIm.png" alt="Посты">
            <span class="posts-info__amount"><?php echo count($posts) . ' постов' ?></span>
        </div>

        <div class="images">
            <?php
            foreach ($posts as $post) {
                ?>
                <img class="images__img" src=<?php echo "../images/" . ($post['images'])[0]; ?> alt="изображение">
                <?php
            }
            ?>
        </div>
    </div>
    <?php
}
?>