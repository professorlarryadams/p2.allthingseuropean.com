<!DOCTYPE html SYSTEM "about:legacy-compat"> 
<html lang="en" xml:lang="en">

<head>
    <title><?php if(isset($title)) echo $title; ?></title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />   
    <!-- Common CSS/JSS -->
   	<link rel="stylesheet" href="../css/default.css" 	type="text/css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src='http://cdn.bitbucket.org/pellepim/jstimezonedetect/downloads/jstz-1.0.4.min.js'></script>
  <script type="text/javascript" src='prettify.js'></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function () {
        var tz = jstz.determine();
        
        response_text = 'No timezone found';
        
        if (typeof (tz) === 'undefined') {
            response_text = 'No timezone found';
        }
        else {
            response_text = tz.name(); 
        }
        
        $('#tz_info').html(response_text);
        
        $('#code-example').html("> var timezone = jstz.determine();\n" +
        "> timezone.name(); \n" + 
        "\"" + tz.name() + "\"\n\n");
        $('#tz_info').show();
        prettyPrint();
    });
  </script>
   

    <!-- Controller Specific CSS/JS -->
    <?php if(isset($client_files_head)) echo $client_files_head; ?>

</head>

<body>


<br>
<div id='menu'>

        <a href='/'>Home |</a>

        <!-- Menu for users who are logged in -->
        <?php if($user): ?>

            <a href='/users/logout'>Logout |</a>
            <a href='/users/profile'>Profile |</a>
            <a href='/posts/users'>Bloggers |</a>
            <a href='/posts/add'>Add Post |</a>
            <a href='/posts'>Blogs |</a>

        <!-- Menu options for users who are not logged in -->
        <?php else: ?>
            
            <a href='/users/signup'>Sign up |</a>
            <a href='/users/login'>Log in |</a>

        <?php endif; ?>

		<br><br>

</div><br><br>

<?php if(isset($content)) echo $content; ?>
</body>

</html>