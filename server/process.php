<?php
include("./configuration/connection.php");
if(isset($_POST['user_id']))
{
  $status_option = $_POST['status_option'];
  if($status_option == 0)
    $connection->query("DELETE FROM accounts WHERE id = ".$_POST['user_id']."");
  $ban_option = $_POST['ban_option'];
  $permission_option =  $_POST['permission_option'];
  echo  $permission_option;
  $user_id = $_POST['user_id'];
  $sql =  "UPDATE users SET MaCV  = ".$permission_option.",  status=".$status_option.", MaBan = ".$ban_option." WHERE  account_id = ".$user_id."";
  
}
if ($connection->query($sql) === TRUE) {
  echo "<script>console.log('New record created successfully')</script>";
} else {
  echo "<script>console.log(".$connection->error.")</script>";
}
?>
