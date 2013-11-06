<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- This is CSS  App CSS file -->
    <link rel="stylesheet" type="text/css" href="/css/appcss.css">

	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>

</head>
<body id='lpage'>
<br>
    <div id='menu'>
<ul>
        <li><a href='/'>Home</a></li>

        <!-- Menu for users who are logged in -->
        <?php if($user): ?>            
            
           <li> <a href='/posts/index'>View Member Posts</a> </li>
           <li> <a href='/posts/add'> Add New Post</a> </li>
            <li><a href='/posts/users'>Follow Members</a> </li>
            <li><a href='/users/profile'>Edit Member Profile</a> </li>
            <li><a href='/users/logout'>Logout</a> </li>

        <!-- Menu options for users who are not logged in -->
        <?php else: ?>
 
            <li><a href='/users/signup'>Sign up</a> </li>
            <li><a href='/users/login'>Log in</a> </li>


        <?php endif; ?>
</ul>
    </div>

    <br>

<div id= 'talign'>
    <?php if(isset($content)) echo $content; ?>
</div>
</body>


</html>