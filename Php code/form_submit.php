<!DOCTYPE HTML>
	<HTML>
		<HEAD>
                <TITLE>form submit</TITLE>
		</HEAD>
	
		<BODY>
	       
            <?php
            
                include "query.php";
            
                session_start();
                $thing_id = $_SESSION['thing_id'];

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $gebruiker_sub = $_POST["gebruiker"];
                    $email_sub = $_POST["email"];
                    $geboorte_sub = $_POST["geboorte"];
                    
                    
                    echo "Submitted username: " . $gebruiker_sub . "<br/>";
                    echo "Submitted email: " . $email_sub . "<br>";
                    echo "Submitted birthday: " . $geboorte_sub . "<br>";
                   
                } 
            
                else {
                    echo "No";
                }
            
                $query = "INSERT INTO `hedwig`.`gebruikers` (`id`,  `nickname`, `email`, `geboorte_datum`) VALUES (NULL, '$gebruiker_sub', '$email_sub', '$geboorte_sub'); ";

                if (!($result = $mysqli->query($query)))
                showerror($mysqli->errno,$mysqli->error);

            ?>

		</BODY>
	</HTML>
