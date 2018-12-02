<?php include ('bootstrap1.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/login.css" />
    <style>
    body{background:linear-gradient(to right ,  lightblue , lightgray); margin-top: 9%;margin-left: 23%;}
    .login_form{border-radius: 100px; outline:none;} 
    #submit{border:  1px solid lightblue;}
    #submit:hover{background: lightblue;}
    #signup{margin-left: -60%;}
    </style>
</head>
<body>
    <div id="container">
        <form method="post" action="">
            <h1 style="text-align:center;font-weight: bold;font-family:Helvetica, Arial, sans-serif;">Signin</h1>
            <input class="login_form" id="uname" type="text" placeholder="User name or Email" name="uname" required><br><br>
            <input class="login_form" id="pass"  type="password" placeholder="Password" name="pass" required><br><br>
            <input type="submit" id="submit" value="Signin" name="submit">
        </form>
        <div id="signup">
        <p>if you don't have account?</p>
        <a href="registration.php">Signup</a>
    </div>
    </div>
    
</body>
</html>