<link rel="stylesheet" href="../css/default.css" 	type="text/css">

<div id="content">

<h1>Log In</h1>
  
    <form action='/users/p_login' method="post" enctype="multipart/form-data" id="sign_in">
    <input type='hidden' name='timezone'>
    
    <h3>
    	<label for="email">Email:</label><br>
      	<input type="text" name="email" id="email"><br>
      
    	<label for="password">Password:</label><br>
      	<input type="password" name="password" id="password"><br>
  	<br>

    	<?php if($error && $error == 'user-exists'): ?>
				This user already exists
			<!-- You're not doing a check for blank-fields, so we'll use this here instead for just a failed login -->	
			<?php elseif(isset($error) && $error == 'invalid-login'): ?>
				Login failed.
			<?php endif; ?>
        

    	<input type='submit' value='Log in'>
        </h3>

	</form>
    </div>
