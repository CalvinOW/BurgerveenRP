<?php

require('../config/config.php');

$Burgernaam =  $_REQUEST['Burgernaam'];
$tel = $_REQUEST['tel'];
$naam = $_REQUEST['naam'];
$Discord = $_REQUEST['Discord'];
$Job =  $_REQUEST['Job'];
$Beroep = $_REQUEST['Beroep'];
$Waarom = $_REQUEST['Waarom'];
$Motivatie = $_REQUEST['Motivatie'];
  

$sql = "INSERT INTO `sollicitaties` (`Burgernaam`, `naam`, `tel`, `Discord`, `job_titel`, `beroep`, `waarom`, `motivatie`) VALUES ('$Burgernaam', '$tel', '$naam',
    '$Discord','$Job','$Beroep','$Waarom','$Motivatie')";
  
if(mysqli_query($db, $sql)){
    header('Location: /bedankt');
} else{
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($db);
}

?>