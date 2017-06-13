<?php
    
include "conect.php";

session_start();
echo session_id();

$user-id = $_GET ["user-id"];

$_SESSION['user']=$user-id
    
echo $user-id;


?>