<?php
require 'config.php';
session_start();
if(!empty($_SESSION["username"])){
  header("Location: admin/index.php");
}
if(isset($_POST["A_login"])){
  $user = $_POST["username"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "Call A_login('$user', '$password')");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['admin_pass']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row['admin_id'];
	  $_SESSION["name"] = $row['admin_user'];
      header("Location: admin/index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('Invalid User/Pass'); </script>";
	echo '<h2><a href="index.html">back</a></h2>';
  }
}
?>