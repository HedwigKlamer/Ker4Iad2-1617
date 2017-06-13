<!DOCTYPE HTML>
	<HTML>
		<HEAD>
                <TITLE>Gebruiker form</TITLE>
		</HEAD>
	
		<BODY>
	       
            <form action="form_submit.php" method="post">
                
                Gebruikersnaam:<br>
                <input type="text" name="gebruiker"><br>
                Email:<br>
                <input type="text" name="email">
                
                <br><br>
                
                Geboortedatum:<br>
                <select name="geboorte">
                    <option value="17-05-1993">17-05-1993</option>
                    <option value="18-06-1994">18-06-1994</option>
                    <option value="19-07-1995">19-07-1995</option>
                    <option value="20-08-1996">20-08-1996</option>
                </select>
                
                <input type="submit" value="Submit">
                
            </form>

		</BODY>
	</HTML>
