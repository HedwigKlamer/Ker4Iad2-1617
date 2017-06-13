<?php
include "conect.php";

$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['user']) || empty($_POST['pass'])){
 $error = "Username or Password is Invalid";
 }
 else
 {
    //Define $user and $pass + Validaten/Sanitizen
    $user=filter_var($_POST['user']);
    $pass=filter_var($_POST['pass']);
          

     $query = ("SELECT id, nickname,wachtwoord FROM gebruikers WHERE wachtwoord='$pass' AND nickname='$user'");
     
     if (!($result = $mysqli->query($query)))showerror($mysqli->errno,$mysqli->error);

     $login = $result->fetch_assoc();
//     echo json_encode($row);
 
    session_start();
    $_SESSION['user_id'] = $login["id"];
    $_SESSION['user_name'] = $login["nickname"];
     
    if($login == true){
       
        header("Location: welcome.php"); // Redirecting to other page
    }
    else
    {
    $error = "Username of Password is Invalid";
    }
 }
}
 
?>