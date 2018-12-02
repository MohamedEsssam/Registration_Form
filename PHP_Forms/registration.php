<?php include ("bootstrap.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/form.css"/>
    <style>
    .registration_form{border-radius: 100px; outline:none;} 
    .error{background: linear-gradient(to right ,  lightblue , lightgray);border: 1px solid lightblue;}
    #submit{border:  1px solid lightblue;outline:none;}
    #submit:hover{background: lightblue;}  
    #login{text-decoration: none;color:black;font-size:30px;font-weight: bold;}
    #button{position:abslute;margin-left:2%;background:white;width:120px;height:50px;border-top-left-radius: 10% 50%;border-bottom-left-radius: 10% 50%;border-top-right-radius: 10% 50%;border-bottom-right-radius: 10% 50%;border:  1px solid skyblue;}
    #button:hover{background:skyblue;transition: 1s;}
    #login:hover{color:white;transition: 1s;}
    </style>
</head>
<body>
    <div id="container">

       <form method="post" action="" onsubmit="return validation()" id="form">

       <h1 style="text-align:center;font-weight: bold;font-family:Helvetica, Arial, sans-serif;">Registration Form</h1>

       <input class="registration_form" id="uname" type="text" placeholder="User name" name="uname" required><br><br>

       <input class="registration_form" id="fname" type="text" placeholder="First name" name="fname" required><br><br>

       <input class="registration_form" id="lname" type="text" placeholder="Last name" name="lname" required><br><br>

       <input class="registration_form" id="email" type="text" placeholder="Email" name="email" required><br><br>

       <input class="registration_form" id="pass" type="password" placeholder="Password" name="password" required><br><br>

       <input class="registration_form" id="pass1" type="password" placeholder="Confirm password" name="pass1" required><br><br>

       <input type="submit" id="submit" value="Signup" name="submit">

        <div class="error" id="error">
            <h3 id="un"></h3>

            <h3 id="fn"></h3>
            
            <h3 id="ln"></h3>
            
            <h3 id="em"></h3>
            
            <h3 id="pa"></h3>
            
            <h3 id="pa1"></h3>

         </div>
         <p style="margin-top:-3%; margin-left:2%">if you have account ?</p>
         <button id="button"><a href="login.php" id="login">Signin</a></button>
 
      </div>

    </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <script src="validate.js"></script>
</body>
</html>
