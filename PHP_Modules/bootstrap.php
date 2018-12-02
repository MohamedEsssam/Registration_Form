/*
   Created by Mohamed Essam 11/27/18
*/

<?php
session_start();
require_once('setting.php');
require_once('connect.php');

if(!$conn){
    die ("connection failed" .mysqli_connect_error());
}
$errors=array();

if(isset($_POST['submit']) && !empty($_POST['submit'])){
    
    $uname = $_POST['uname'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $user_check_query = "SELECT * FROM registration WHERE uname='$uname' OR email='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['uname'] === $uname) {
      array_push($errors);
    }
    if ($user['email'] === $email) {
      array_push($errors);
    }
  }
  if (count($errors) == 0) {
    $pass=md5($password);
    $sql = "INSERT INTO registration (uname,fname,lname,email,password,reg_d) VALUES ('$uname','$fname','$lname','$email','$pass',now()) ";
if(mysqli_query($conn,$sql)){
    echo "<br>"."inserted";
    $_SESSION['uname'] = $uname;
    $_SESSION['success'] = "You are now logged in";
    header('location: login.php');
}
else {
    echo "<br>"."Error: " . $sql . "<br>" . mysqli_error($conn);
  }
 }
}

?>
