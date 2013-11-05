<div id="content">

<h1>Log In</h1>
  
    <form action='/users/p_login' method="post" enctype="multipart/form-data" id="sign_in">
    
    <h3>
    	<label for="email">Email:</label><br>
      	<input type="text" name="email" id="email"><br>
      
    	<label for="password">Password:</label><br>
      	<input type="password" name="password" id="password"><br>
    </h3>

    	<br>

    	<?php if(isset($error)): ?>
        <div id='error'>
            Login failed. Please double check your email and password.
        </div>
        <br>
    	<?php endif; ?>

    	<input type='submit' value='Log in'>

	</form>
    </div>
