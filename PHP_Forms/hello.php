<?php include ('bootstrap1.php'); ?>
<?php include ('bootstrap2.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
   <style>
    body{background:linear-gradient(to right ,  lightblue , lightgray);margin-left:20%;margin-top:9%;}
    #hello{ width: 60%;border: none;background: #f8f8f8;border-top-left-radius: 10% 50%;border-bottom-left-radius: 10% 50%;border-top-right-radius: 10% 50%;border-bottom-right-radius: 10% 50%;padding: 50px;  text-align: center;}   
    #button{background:white;width:120px;height:50px;border-top-left-radius: 10% 50%;border-bottom-left-radius: 10% 50%;border-top-right-radius: 10% 50%;border-bottom-right-radius: 10% 50%;border:  1px solid lightblue; font-size:25px;font-weight:bold;}
    #button:hover{cursor: pointer;background:lightblue;color:white;transition: 1s;}
    </style>

</head>
<body>
    <div id="hello">
    <h1 id="un">Welcome <?php echo $_SESSION['uname'] ?></h1>
    <h2>you are logged in</h2>
    <form method="post">
    <button id="button" name="button" type='submit'>Logout</button>
    </form>
    </div>
</body>
</html>