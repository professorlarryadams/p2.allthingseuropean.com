<article>

<?php foreach($posts as $post): ?>

    <h1><?=$post['first_name']?> <?=$post['last_name']?> Posted:</h1>
    <p><?=$post['picture']?> <?=$post['country']?> Country:</p><br>

    <p><?=$post['content']?></p>

    <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
        <?=Time::display($post['created'])?>
    </time>

<?php endforeach; ?>
</article>