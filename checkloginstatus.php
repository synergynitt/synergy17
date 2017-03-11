<?php
session_start();
if (isset($_SESSION['userid'])){
  $userid=$_SESSION['userid'];
  $name=$_SESSION['name'];
  $email=$_SESSION['email'];
  $message = array ("status" =>"success" , "userid"=>$userid, "name"=>$name, "email"=>$email);
  echo json_encode($message);
}else{
  $message = array ("status" =>"fail" , "description"=>"Not logged in");
  echo json_encode($message);
}

?>
