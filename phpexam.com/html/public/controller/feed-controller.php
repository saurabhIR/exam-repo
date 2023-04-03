<?php
include './user.php';
$post_id = $_GET['id'];
$user= new User();
$row=$user->appView($post_id);
if($row){
  header('Location: appView.php');
}
?>