<?php
function makePost(array $post, $user)
{ 
?>
    <div class="post">
        <div class="post__header">
            <a href=<?php echo '../profile?id=' . $user['user_id'] ?>>
                <img class="post__avatar" src=<?php echo "../images/" . $user['profile_avatar']; ?> alt="аватар"> 
            </a>  
            <a class="post__name" href=<?php echo '../profile?id=' . $user['user_id'] ?>>                
                <span><?php echo $user['name']?></span>
            </a>
            
            <img class="post__edit" src="../images/Edit.png" alt="редактировать"> 
        </div>

        <img class="post__image" src="<?php echo '../images/' . ($post['image']); ?>" alt="фото поста"> 
        <button class="post__likes">
            <img class="post__heart" src="../images/heart.png" alt="символ лайка"> 
            <p class="post__amountLike"><?php echo $post['likes']; ?></p>
        </button>
        <p class="post__text"><?php echo $post['content']; ?></p>
             <?php if (strlen($post['content']) >= 50): ?>
            <p class="post__more">еще</p>
        <?php endif; ?>
        <p class="post__time"><?php echo date('d.m.Y H:i', strtotime($post['posted_at'])); ?></p>
    </div>
<?php
}
?>