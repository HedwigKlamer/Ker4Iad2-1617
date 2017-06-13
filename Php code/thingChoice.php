<?php
    
include "conect.php";
//include "session.php";
session_start();

//echo $_SESSION['user'];

//$query = "SELECT " .$_SESSION['user']. " FROM gebruikers";
$query = "SELECT id FROM gebruikers WHERE nickname ='" .$_SESSION['user']."' ";

//debug for query
if (!($result = $mysqli->query($query)))
showerror($mysqli->errno,$mysqli->error);

//haalt de eerste regel uit $result
$row = $result->fetch_assoc();

$_SESSION['userID']= $row['id'];

$query = "SELECT * FROM ding WHERE gebruiker='".$_SESSION['userID']."'";

//debug for query
if (!($result = $mysqli->query($query)))
showerror($mysqli->errno,$mysqli->error);

//haalt de eerste regel uit $result
$row = $result->fetch_assoc();

echo $row['id'];

if (!($result = $mysqli->query($query)))
showerror($mysqli->errno,$mysqli->error);

//haalt de eerste regel uit $result
$row = $result->fetch_assoc();

echo $row['id'];













//$thingID = $_GET["thingID"];
//$_SESSION['thing']=$thingID;

//$query = "SELECT " .$_SESSION['thing'].  " FROM ding";


?>