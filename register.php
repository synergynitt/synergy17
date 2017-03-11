<?php
require 'connect.php';
require 'functions.php';
$name = $_POST['first-name'] . " ".$_POST['last-name'];

$name=mysqli_real_escape_string($db, $name);
$email=mysqli_real_escape_string($db, $_POST['email']);
$college=mysqli_real_escape_string($db,$_POST['college']);
$city=mysqli_real_escape_string($db,$_POST['city']);
$department=mysqli_real_escape_string($db,$_POST['department']);
$year=mysqli_real_escape_string($db,$_POST['year']);
$rollno=mysqli_real_escape_string($db,$_POST['rollno']);
$phone=mysqli_real_escape_string($db, $_POST['phone']);
$password=mysqli_real_escape_string($db, $_POST['password']);

$sql = "SELECT * FROM `users` WHERE `email`=\"$email\"";
$result = executeQuery($db, $sql);

if ($result->num_rows == 0){
  session_start();
  $_SESSION['userid']=$row['userid'];
  $_SESSION['email']=$row['email'];
  $_SESSION['name']=$row['name'];
  $_SESSION['college']=$row['college'];
  $_SESSION['phone']=$row['phone'];
  $_SESSION['rollno']=$row['rollno'];

  $insert_sql = "INSERT INTO `users`
                (name, college, city, department, year, email, password, rollno, phone)
                VALUES
  (\"$name\",\"$college\",\"$city\",\"$department\",\"$year\",\"$email\",\"$password\",\"$rollno\",\"$phone\")";
  executeQuery($db, $insert_sql);
  $message = array ("status" =>"success" , "description"=>"You are now registered for Synergy 2017. Logged In");
  echo json_encode($message);


}else{
  while ($row=$result->fetch_assoc()){
    $password_indb=$row['password'];
    if ($password_indb == $password){
      session_start();
      $_SESSION['userid']=$row['userid'];
      $_SESSION['name']=$row['name'];
      $_SESSION['college']=$row['college'];
      $_SESSION['rollno']=$row['rollno'];
      $_SESSION['email']=$row['email'];

      $message = array ("status" =>"success" , "description"=>"You have already registered. Logged In");
      echo json_encode($message);
    }else {
      $message = array ("status"=>"fail" , "description"=>"You have already registered. Wrong Email Password Combination ");
      echo json_encode($message);
    }
  }

}

 ?>
