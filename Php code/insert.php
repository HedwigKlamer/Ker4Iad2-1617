<?php
    include "conect.php";

    //in url dan achter insert.php invoegen '  ?nickname=NICKNAME&mail=EMAIL  '
    $naam = $_GET ["nickname"];
    $email = $_GET ["email"];

    $query = "INSERT INTO `hedwig`.`gebruikers` (`id`, `nickname`, `email`, `geboorte_datum`) VALUES (NULL, '$naam', '$email', '1312-06-03');";

    if (!($result = $mysqli->query($query))) 
        showerror($mysqli->errno,$mysqli->error); 

?>