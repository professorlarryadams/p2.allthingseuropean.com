<div id="content">
<h3>Select Unfollow to view all postings:</h3>
<br>

<h2>
<?php foreach($users as $user): ?>

    <!-- Print this user's name -->
    <img src="../images/flags/<?=$user['picture']?>" alt="Blogger image" class='profile'><br> <?=$user['first_name']?> <?=$user['last_name']?>

    <!-- If there exists a connection with this user, show a unfollow link -->
    <?php if(isset($connections[$user['user_id']])): ?>
        <a href='/posts/unfollow/<?=$user['user_id']?>'>Unfollow</a>

    <!-- Otherwise, show the follow link -->
    <?php else: ?>
        <a href='/posts/follow/<?=$user['user_id']?>'>Follow</a>
    <?php endif; ?>

    <br><br>

<?php endforeach; ?>
</h2>

</div>

