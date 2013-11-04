<!DOCTYPE html SYSTEM "about:legacy-compat"> 
<html lang="en" xml:lang="en">

<head>
    <title><?php if(isset($title)) echo $title; ?></title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />   
    <!-- Common CSS/JSS -->
   <link rel="stylesheet" href="../css/default.css" 	type="text/css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>$('input[name=timezone]').val(jstz.determine().name());</script>

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
            <a href='/posts/add'>Posts |</a>
            <a href='/posts'>View Posts |</a>
            <a href='/posts/users'>Follow Users |</a>

        <!-- Menu options for users who are not logged in -->
        <?php else: ?>

            <a href='/users/signup'>Sign up |</a>
            <a href='/users/login'>Log in |</a>

        <?php endif; ?>

    </div>

    <br><br>

    <?php if(isset($content)) echo $content; ?>
    
    

</body>
</html>