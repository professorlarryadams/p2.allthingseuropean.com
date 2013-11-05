<section>

<div id="content">

	<h1>Profile Status</h1>

    <?php if($user): ?> 
   	<h2>This is the profile for <?=$user->first_name?> <?=$user->last_name?></h2>
    <h3>
    	User ID: <?=$user->user_id?><br>
        Email: <?=$user->email?><br>
    	Country: <?=$user->country?><br>
        Picture: <?=$user->picture?><br>
        </h3>
	<?php else: ?>
   	<h2>You are NOT logged in!
	<?php endif; ?> <br>
</h2>
</div>
</section>