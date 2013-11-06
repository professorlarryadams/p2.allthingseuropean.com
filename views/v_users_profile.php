<div id="content">

	<h1>Profile Status</h1>
    
    <?php if($user): ?> 
   	<h2>You are login as <?=$user->first_name?> <?=$user->last_name?></h2><br>
    <h3>
    	<div>User ID: <?=$user->user_id?></div><br>
        <div>Email: <?=$user->email?></div><br>
    	<div>Country: <?=$user->country?></div><br>
        <div><img src="../images/flags/<?=$user->picture?>" alt="Blogger image"></div>
        </h3><br>
	
	<?php else: ?>
   	<h2>You are NOT logged in!</h2>
	<?php endif; ?> <br>

</div>
