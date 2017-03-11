<?php
require 'connect.php';
require 'functions.php';
$workshop = mysqli_real_escape_string($db, $_POST['workshop']);
if (!(array_key_exists($workshop, $workshops))){
  $message = array ("status" =>"fail" , "description"=>"Workshop Not Found");
  echo json_encode($message);
}

session_start();
if (isset($_SESSION['userid'])){
  $member1name = mysqli_real_escape_string($db, $_POST['member1name']);
  $member2name = mysqli_real_escape_string($db, $_POST['member2name']);
  $member3name = mysqli_real_escape_string($db, $_POST['member3name']);
  $member4name = mysqli_real_escape_string($db, $_POST['member4name']);
  $member5name = mysqli_real_escape_string($db, $_POST['member5name']);
  $member1email = mysqli_real_escape_string($db, $_POST['member1email']);
  $member2email = mysqli_real_escape_string($db, $_POST['member2email']);
  $member3email = mysqli_real_escape_string($db, $_POST['member3email']);
  $member4email = mysqli_real_escape_string($db, $_POST['member4email']);
  $member5email = mysqli_real_escape_string($db, $_POST['member5email']);

  $sql = "SELECT * FROM `workshop-registration` WHERE `member1email`='$member1email' AND `workshop`='$workshop'";
  $result = executeQuery($db, $sql);
  if ($result->num_rows == 0){
    $insert_sql = "INSERT INTO `workshop-registration`
                  (workshop, member1name, member2name, member3name, member4name, member5name, member1email, member2email, member3email, member4email, member5email)
                  VALUES
    (\"$workshop\",\"$member1name\",\"$member2name\",\"$member3name\",\"$member4name\",\"$member5name\",\"$member1email\",\"$member2email\",\"$member3email\",\"$member4email\",\"$member5email\")";
    executeQuery($db, $insert_sql);
    $message = array ("status" =>"success" , "description"=>"You have successfully registered for ".$workshops[$workshop][0]);
    echo json_encode($message);
  }else{
    $message = array ("status" =>"success" , "description"=>"You have already registered");
    echo json_encode($message);
  }



}else{
  $message = array ("status" =>"fail" , "description"=>"Not logged in");
  echo json_encode($message);
}
?>
