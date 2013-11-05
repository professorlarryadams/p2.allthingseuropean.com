<!DOCTYPE html SYSTEM "about:legacy-compat"> 
<html lang="en" xml:lang="en">

<head>
    <title><?php if(isset($title)) echo $title; ?></title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />   
    <!-- Common CSS/JSS -->
    <link rel="stylesheet" href="../css/default.css" 	type="text/css">
    <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
    <link href="../SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">
    <script src="../SpryAssets/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
	<script src="../SpryAssets/SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script><!-- Controller Specific CSS/JS -->
    <?php if(isset($client_files_head)) echo $client_files_head; ?>

</head>

<body>

<br><br>

<div id="content">
    
  <form action='/users/p_signup' method="post" enctype="application/x-www-form-urlencoded" name="signup">
    <h1>Sign Up</h1>
    
    <h3><span id="sprytextfield1">
        <label for="first_name">First Name:</label><br>
        <input type="text" name="first_name" id="first_name">
        <span class="textfieldRequiredMsg">A value is required.</span></span><br>
        
     <span id="sprytextfield2">
   	 <label for="last_name">Last Name:</label><br>
     	<input type="text" name="last_name" id="last_name">
   	 <span class="textfieldRequiredMsg">A value is required.</span></span><br>
     
     <span id="sprytextfield4">
     <label for="country">Country:</label><br>
     <input type="text" name="country" id="country">
     <span class="textfieldRequiredMsg">A value is required.</span></span>
     <br>
     
      <span id="sprytextfield3">
   	 <label for="email">Email:</label><br>
     <input type="text" name="email" id="email">
     <span class="textfieldRequiredMsg">A value is required.</span></span><br>
        
     <span id="sprypassword1">
     <label for="password">Password:</label>
     <br>
     <input type="password" name="password" id="password">
     <span class="passwordRequiredMsg">A value is required.</span></span><br><br>

   	  <label for="file">Upload your picture:<br>
   	  </label><input name="picture"  type="file" id="picture"><br>
     </h3>
        
        <br><br>

    	<input type='submit' value='Sign up'>
        
  </form>

</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
</script>
</body>
</html>