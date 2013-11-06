<link rel="stylesheet" href="../css/default.css" 	type="text/css">
<div id="content">
<h1>Sign Up</h1> 
  
  <form action='/users/p_signup' method="post" enctype="multipart/form-data"  name="signup">
    
        <label for="first_name">First Name:</label><br>
        <input type="text" name="first_name" id="first_name" required><br>   
     
   	 	<label for="last_name">Last Name:</label><br>
     	<input type="text" name="last_name" id="last_name" required><br>
             
     	<label for="country">Country:</label><br>
     	<input type="text" name="country" id="country" required><br>
    
      	<label for="email">Email:</label><br>
      	<input type="text" name="email" id="email" required><br>
        
    	<label for="password">Password:</label><br>
     	<input type="password" name="password" placeholder='Password' id="password" required><br><br>

   	  	<label for="file">Upload your picture:<br>
        
   	  	</label><input name="picture" accept='image' value='file' id="picture"><br>
        
        <input type='file' accept='image' name='picture' required><br>
            
        <?php if(isset($error)): ?>
                <div class='error'>
                     Image upload failed, please try again.
                </div>
                                <br>
        <?php endif; ?>
        
        
        <?php if($error && $error == 'user-exists'): ?>
         <div class='error'>
                This user already exists
         </div>
          <?php elseif(isset($error) && $error == 'invalid-login'): ?>
          <div class='error'>
              	Login failed, please try again
          </div>
          <?php endif; ?>
     </h3>
         
        <br>

    	<input type='submit' value='Sign up'>
         
        
  </form>

</div>
