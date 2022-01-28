<?php

require('../config/config.php');

$Burgernaam =  $_REQUEST['burgernaam'];
$reden = $_REQUEST['reden'];
$bewijs = $_REQUEST['bewijs'];
  

$sql = "INSERT INTO `reports` (`burgernaam`, `reden`, `bewijs`) VALUES ('$Burgernaam', '$reden', '$bewijs')";
  
if(mysqli_query($db, $sql)){
    header('Location: /succes');
} else{
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($db);
}

?>