<?php
include("loginserv.php"); // Include loginserv for checking username and password
?>
 
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Raleway" rel="stylesheet">  
        <style>
            input {
                padding: 12px 20px;
                margin: 8px 0;
                border: none;
                background-color: #F67156;
                color: white;
            }
            h1{
                font-size: 60px; 
                color: #F67156; 
                font-family: 'Open Sans Condensed', sans-serif;
                
            }
        </style>
    </head>
    <body>
        <h1 align="center">S.UV Login</h1>
        <form action="" method="post" style="text-align:center;">
        <input type="text" placeholder="Username" id="user" name="user"><br/><br/>
            <input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
            <input type="submit" value="Login" name="submit">
            <!-- Error Message -->
            <span><?php echo $error; ?></span>
        </form>
    </body>
</html>