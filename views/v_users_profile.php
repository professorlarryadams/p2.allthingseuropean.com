<div id="content">

	<h1>Profile Status</h1>
    
    <?php if($user): ?> 
   	<h2>You are login as <?=$user->first_name?> <?=$user->last_name?></h2><br>
    <h3>
    	User ID: <?=$user->user_id?><br>
        Email: <?=$user->email?><br>
    	Country: <?=$user->country?><br>
        Picture: <br>
        <div><img src="/images/flags/<?=$user['picture']?>" alt="Blogger image" class='profile'></div>
        </h3><br>
	
	<?php else: ?>
   	<h2>You are NOT logged in!</h2>
	<?php endif; ?> <br>
</div>
