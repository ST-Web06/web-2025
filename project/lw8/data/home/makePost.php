<?php
echo <<<HTML
    <div class="post">
    <div class="post__header" >
        <img class="post__avatar" src="../{$avatar}" alt="Avatar">
        <span class="post__name">$name</span>
        <img class="post__edit" src="../images/Edit.png" alt="Иконка для редактирования">
    </div>
HTML;
foreach ($images as $image) {
    $path = "../images/" . $image;
    echo "<img class='post__image' src='{$path}' alt='Фото поста'>";
}

echo <<<HTML
    <div class='post__likes'>
        <img post__heart src='../images/heart.png' alt='Реакции'>
        <span class='post_amountLike'>$likes</span>
    </div>
    <span class='post__description'>$content</span>
    <span class='post__more'>ещё</span>
    <span class='post__time'>$time</span>
</div>
HTML;
?>