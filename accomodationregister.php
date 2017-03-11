<?php
require 'connect.php';
require 'functions.php';
session_start();
$register = $_POST['register'];
if ($register == 1){
  if (isset($_SESSION['userid'])){
    $userid=$_SESSION['userid'];
    $name=$_SESSION['name'];
    $college=$_SESSION['college'];
    $email=$_SESSION['email'];
    $rollno=$_SESSION['rollno'];
    $phone=$_SESSION['phone'];
    $sql = "SELECT * FROM `accomodation` WHERE `email`='$email'";
    $result = executeQuery($db, $sql);
    if ($result->num_rows == 0){
      $insert_sql = "INSERT INTO `accomodation`
      (userid, name, college, email, rollno, phone)
      VALUES
      (\"$userid\",\"$name\",\"$college\",\"$email\",\"$rollno\",\"$phone\")";
      executeQuery($db, $insert_sql);
      $message = array ("status" =>"success" , "description"=>"You are now registered for accomodation. ");
      echo json_encode($message);
    }else{
      $message = array ("status" =>"success" , "description"=>"You are already registered for accomodation. ");
      echo json_encode($message);
    }
  }else{
    $message = array ("status" =>"fail" , "description"=>"Not logged in");
    echo json_encode($message);
  }
}
?>
