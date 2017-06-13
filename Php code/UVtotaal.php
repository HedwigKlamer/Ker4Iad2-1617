<?php

include "conect.php";
session_start();



$query = "SELECT AVG( UVstraling ) FROM `dingData` WHERE ding = ".$_SESSION['user_id']." ORDER BY id DESC LIMIT 15";

if (!($result = $mysqli->query($query)))
showerror($mysqli->errno,$mysqli->error);

$row = $result->fetch_assoc();
echo json_encode($row);

/*
do {
    //echo $row["nickname"] . $row["email "];
    echo json_encode($row);
} while ($row = $result->fetch_assoc());
*/
?>