<!DOCTYPE HTML>
	<HTML>
		<HEAD>
                <TITLE>KERIAD4 query</TITLE>
		</HEAD>
	
		<BODY>
	       
            <?php

                $db_user = 'hedwig';
                $db_pass = 'uo5oos4ouR'; //wachtwoord
                $db_host = 'localhost';
                $db_name = 'hedwig'; // databasenaam

                /* Open a connection */
                $mysqli = new mysqli("$db_host","$db_user","$db_pass","$db_name");

                /* check connection */
                if ($mysqli->connect_errno) {
                echo "Failed to connect to MySQL: (" . $mysqli->connect_errno() . ") " . $mysqli->connect_error();
                exit();
                } 


                function showerror($error,$errornr) {
                die("Error (" . $error . ") " . $errornr);
                }

            ?>

		</BODY>
	</HTML>