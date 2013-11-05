<div id="content">

<h1>Profile Status</h1>

    <?php if($user): ?> 
   	<h2>This is the profile for <?=$user->first_name?> <?=$user->last_name?></h2>
    <br>
    <h3>
    	User ID: <?=$user->user_id?><br>
        Email: <?=$user->email?><br>
    	Country: <?=$user->country?><br>
        Picture: <?=$user->picture?><br>
        </h3><br>
	<?php else: ?><br>
   	<h1>No user specified</h1>
	<?php endif; ?> <br>
    
    </div>