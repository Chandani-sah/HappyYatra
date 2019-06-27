<?php include('server.php'); ?>

<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="register.css" >
</head>
    
<body>
    <div class ="loginbox" >
    <img src=pictures/user.jpg  class="user" >
        <pre><h2>REGISTER HERE</h2></pre>
        <form action="registration.php" method="POST">

            <?php include('errors.php'); ?>

             <p>First Name </p>
            <input type="text" name="fname" placeholder="Enter First Name " required="required">
             <p>Last name </p>
            <input type="text" name="lname" placeholder="Enter Last Name" required="required">
            <p>Email</p>
            <input type="email" name="email" placeholder="Enter Email" required="required">
            <p>Password</p>
            <input type="password" name="password_1" placeholder="************" required="required">
            <p>Re-Enter Password</p>
            <input type="password" name="password_2" placeholder="************" required="required"> 
            <input type="submit" name="reg_user" placeholder="Register">
            <p>
            Already a member? <a href="login.php"><b><u>Signin</u></b></a>
        </p>
            
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
