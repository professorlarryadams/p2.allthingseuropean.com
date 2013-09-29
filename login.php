<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Project 2 Login</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href="css/dropdown-menu.css" media="screen" rel="stylesheet" type="text/css" />

</head>
<body>

	<br />
		<h1 style="text-align:center">All Things European Login</h1>
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
		<form action="blog.php" method="post">
			<h1>Login Form</h1>
			<div>
				<input type="text" placeholder="Username" required id="username" />
			</div>
			<div>
				<input type="password" placeholder="Password" required id="password" />
			</div>
			<div>
				<input type="submit" value="Log in" />
				<a href="#">Lost your password?</a>
				<a href="#">Contact Us</a>
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="#">Create An Account</a>
		</div><!-- button -->
	</div><!-- content -->
</div><!-- container -->

</body>
</html>