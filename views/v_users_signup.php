<link rel="stylesheet" href="../css/default.css" 	type="text/css">
<div id="content">
<h1>Sign Up</h1> 
  
  <form action='/users/p_signup' method="post" enctype="multipart/form-data"  name="signup">
    
        <label for="first_name">First Name:</label><br>
        <input type="text" name="first_name" id="first_name"><br>   
     
   	 	<label for="last_name">Last Name:</label><br>
     	<input type="text" name="last_name" id="last_name"><br>
             
     	<label for="country">Country:</label><br>
     	<input type="text" name="country" id="country"><br>
    
      	<label for="email">Email:</label><br>
      	<input type="text" name="email" id="email"><br>
        
    	<label for="password">Password:</label><br>
     	<input type="password" name="password" placeholder='Password' id="password"><br><br>

   	  	<label for="file">Upload your picture:<br>
   	  	</label><input name="picture"  type="file" value='file' id="picture"><br>
        
        <input type='hidden' name='timezone'>
     </h3>
         
        <br><br>

    	<input type='submit' value='Sign up'>
         
        
  </form>

</div>
