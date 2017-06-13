<?php
//blijf van je conect file af en include hem alleen in andere files

   $db_user = '*****'; //geblanked voor de internets
   $db_pass = '*****';
   $db_host = '*****';
   $db_name = '*****';

/* Open a connection */
$mysqli = new mysqli("$db_host","$db_user","$db_pass","$db_name");

/* check connection */
if ($mysqli->connect_errno) {
   echo "Failed to connect to MySQL: (" . $mysqli->connect_errno() . ") " . $mysqli->connect_error();
   exit();
}

/*debug */
function showerror($errornr,$error) {
die("Error (" . $errornr . ") " . $error);
}
?>