
<?php
/**

    * This PHP script starts a session and includes the user.php file which contains the User class.
    * It checks if email and password are set in the $_POST superglobal array. If true, it creates a new User object and calls the Login() method to authenticate the user.
    * @return void
    */
session_start();
include '../user.php';
if(isset($_POST['username']) && isset($_POST['password'])){
    $user= new User($_POST);
    $user->findByEmail($_POST['username'],$_POST['password']);
    if($user){
      header("Location: ../feed.php");
    }
    else{
      echo"Incorrect Username/Password";
    }
}
else{
    header('Location: ../login.php');
}
?>