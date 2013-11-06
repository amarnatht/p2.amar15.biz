<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- This is CSS  App CSS file -->
    <link rel="stylesheet" href="/css/appcss.css" type="text/css">

	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>

</head>
<body>

    <div id='menu'>

        <a href='/'>Home</a>

        <!-- Menu for users who are logged in -->
        <?php if($user): ?>            
            
            <a href='/posts/index'> || View Member Posts ||</a>
            <a href='/posts/add'> Add New Post ||  </a>
            <a href='/posts/users'> Follow Members || </a>
            <a href='/users/profile'> Member Profile || </a>
            <a href='/users/logout'>Logout</a>

        <!-- Menu options for users who are not logged in -->
        <?php else: ?>

            <a href='/users/signup'>|| Sign up ||</a>
            <a href='/users/login'>Log in</a>


        <?php endif; ?>

    </div>

    <br>

    <?php if(isset($content)) echo $content; ?>

</body>


</html>