<?php include('server.php') ?>
<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="login.css" >
</head>
    
<body>
    <div class ="loginbox" >
    <img src=pictures/user.jpg  class="user" >
        <h2>Log In Here</h2>
        <form action="login.php" method="post">

            <?php include('errors.php'); ?>
            <p>Email</p>
            <input type="email" name="email" placeholder="Enter Email" required="required">
            <p>Password</p>
            <input type="password" name="password_1" placeholder="************" required="required">
            <input type="submit" name="login_user" placeholder="Sign In">
            
        </form>
    </div>
    
    <!-- bottom menu bar for all pages -->
     <div class="bottom-menu" style="cursor:pointer">
        
        
        <ul>
            <a href="mainpage1.html" >
            <li class="selected">
                <img src=pictures/home.jpg width=30 height=30>
                </li>
            </a>
        </ul>
        
        <ul>
            <a href="login.php" class="selected">
            <li>
                <img src=pictures/user1.jpg.svg width=40 height=40>
                </li>
            </a>
        </ul>
    </div>
    
    
    
</body>
</html>
