<?php

function executeQuery($db, $sql){
  if (!$result = $db->query($sql)){
    $message = array ("status" => "error","description" => "Database Error", "error" => $db->error);
    echo json_encode($message);
    die();
  }
  return $result;
}

$workshops = array('creo' => array("Creo Workshop",1,"450 per participant","1 Day", "Designer's Consortium"),
'solidworks' => array("Solidworks Workshop",1,"450 per participant","1 Day", "Designer's Consortium"),
'automobile' => array("Automobile Workshop", 1, "750 per paticipant", "*", "PSI NITT"),
'spheredrone' => array("Sphere Drone Workshop", 5 , "1300 per participant", "2 Days", "Aerotrix"),
'cnc' => array("Advanced CNC using Arduino Workshop",1 ,"1290 per paticipant", "2 Days", "Aerotrix"),
'selfbalancingrobot' => array("Self Balancing Robot Workshop", 5, "750 per participant", "2 Days", "Robokart")
);

$events = array('waterrocketry' => array("Water Rocketry", 3),
'sanrachana' => array("Sanrachana",3),
'fixthemup' => array("Fix Them Up", 1),
'engineerofthefuture' => array("Engineer of the Future", 3),
'techyhunt' => array("Techy Hunt", 3),
'junkyardwars' => array("Junkyard Wars", 5),
'paperpresentation' => array("Paper Presentation", 2),
'paperplane' => array("Paper Plane",1),
'selfpropellingvehicle' => array("Self Propelling Vehicle",2),
'cadmodelling' => array("CAD Modelling", 2),
'mcquiz' => array("McQuiz",2)
);
?>
