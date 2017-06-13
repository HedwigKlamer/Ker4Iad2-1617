<?php

include "conect.php";

$query = "SELECT * FROM gebruikers";

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