<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->

<head>
<meta charset="UTF-8">

<title>All Things European Membership</title>

<link href="css/style.css" media="screen"  rel="stylesheet" type="text/css"  />
<link href="css/dropdown-menu.css" media="screen" rel="stylesheet" type="text/css" />
<link href="SpryAssest/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="SpryAssest/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
<script src="SpryAssest/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssest/SpryValidationTextarea.js" type="text/javascript"></script>
</head>

<body>

<br />
  <h1 style="text-align:center">All Things European</h1>
	<br />

<ul id="navigation" class="nav-main">
	<li><a href="home.php" title="Homepage">Home</a></li>
    <li><a href="about.php" title="about_us">About Us</a></li>
    <li><a href="blog.php" title="blog">Blog</a></li>
    <li><a href="members.php" title="membership">Members</a></li>
    <li><a href="contact.php" title="contact_us">Contact</a></li>
    <li><a href="login.php" title="Login">Login</a></li>

</ul>


<div class="container">

<div id="content">

<form name="form1" method="post" action="#">

<h1>Contact Form</h1>
<span id="sprytextfield1">
<label for="name">Full Name</label>
<br />
<input name="name" type="text" id="name" size="50"><br />
</span><span><span class="textfieldRequiredMsg">A value is required.</span></span>

<span id="sprytextfield2">
<label for="email">Email</label><br />
<input name="email" type="text" id="email" size="50"><br />
<span class="textfieldRequiredMsg">A value is required.</span></span>


<span id="sprytextarea1">
<label for="Comments">Comments</label><br />
<textarea name="Comments" id="Comments" cols="40" rows="3"></textarea><br />
<span class="textareaRequiredMsg">A value is required.</span></span>
<br />

<input name="" type="submit">

</form>
</div>

</div>

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
</script>


</body>
</html>
