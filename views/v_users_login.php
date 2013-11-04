<!DOCTYPE html SYSTEM "about:legacy-compat"> 
<html lang="en" xml:lang="en">

<head>
    <title><?php if(isset($title)) echo $title; ?></title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />   
    <!-- Common CSS/JSS -->
   	<link rel="stylesheet" href="../css/default.css" 	type="text/css">
   	
    <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
   	<script src="../SpryAssetsSpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
        <!-- Controller Specific CSS/JS -->
    <?php if(isset($client_files_head)) echo $client_files_head; ?>

</head>

<body>

<br>

<div id="content">
  
    <form action='/users/p_login' method="post" enctype="multipart/form-data" id="sign_in">
    
    <h1>Log In</h1>
    
    
      <h3><span id="sprytextfield1">
      <label for="email">Email:</label><br>
      <input type="text" name="email" id="email"><br>
      <span class="textfieldRequiredMsg">A value is required.</span></span><br>
    
      <span id="sprytextfield2">
      <label for="password">Password:</label><br>
      <input type="password" name="password" id="password"><br>
      <span class="textfieldRequiredMsg">A value is required.</span></span>
      </h3>
  
    	<br>

    	<?php if(isset($error)): ?>
        <div class='error'>
            Login failed. Please double check your email and password.
        </div>
        <br>
    	<?php endif; ?>

    	<input type='submit' value='Log in'>

	</form>
    </div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
</script>
</body>
</html>