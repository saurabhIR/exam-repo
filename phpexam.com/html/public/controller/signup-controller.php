<?php
/**
  * This PHP script save new user data in database and redirect it to the login page
  * @return void
  */
session_start();
include '../user.php';
if(isset($_POST['username']) && isset($_POST['password'])){
    $user= new User($_POST);
    $user->Add($_POST['username'],$_POST['password']);
    if($user){
      header("Location: ../login.php");
    }
    else{
      echo"Email Already exists";
    }
}
else{
    header('Location: ../signup.php');
}
?>