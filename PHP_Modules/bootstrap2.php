/*
   Created by Mohamed Essam 11/27/18
*/

<?php 
require_once('setting.php');
require_once('connect.php');
require_once('bootstrap1.php');
  
if(isset($_POST['button'])){
    $name=$_SESSION['uname'];
    $sql = "UPDATE `registration` SET `last_d`= now() WHERE uname='$name' OR email='$name'";
    $results = mysqli_query($conn, $sql);
  	if ($results) {
    echo "<br>"."updated";
    $_SESSION['uname'] = $uname;
    header('location:login.php');
 }
  else {
        echo "<br>"."Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }
    
 ?>
