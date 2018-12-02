<?php
session_start();
require_once('setting.php');
require_once('connect.php');

if(!$conn){
    die ("connection failed" .mysqli_connect_error());
}
if(isset($_POST['submit'])){
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    $password=md5($pass);

$sql = "SELECT * FROM `registration` WHERE (uname='$uname' OR email='$uname') AND password='$password'";
$results = mysqli_query($conn, $sql);

  	if (mysqli_num_rows($results) == 1) {
    echo "<br>"."selected";
    $_SESSION['uname'] = $uname;
    header('location: hello.php');
 }
  else {
        echo "<br>"."Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }
?>