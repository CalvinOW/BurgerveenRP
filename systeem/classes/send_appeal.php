<?php

require('../config/config.php');

$Burgernaam =  $_REQUEST['Burgernaam'];
$omschijving = $_REQUEST['omschijving'];
$Waarom = $_REQUEST['Waarom'];
  

$sql = "INSERT INTO `appeals` (`burgernaam`, `omschijving`, `waarom`) VALUES ('$Burgernaam', '$omschijving', '$Waarom')";
  
if(mysqli_query($db, $sql)){
    header('Location: /succes');
} else{
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($db);
}

?>