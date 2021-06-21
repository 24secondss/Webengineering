<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3c.org/TR/html4/strict.dtd"> 
<html>
	<head> 
		<title>Island Grill-Account</title> 
	</head> 
	<body>
		<h1> Mal schaun obs funktioniert </h1>

		<?php
			$benutzername_input = $_POST["Benutzername_login"];
			$passwort_input = $_POST["Passwort_login"];

			if ($benutzername_input == 'Admin') {
				if ($passwort_input == '1234') {
					$ausgabe = "<p> Admin erfolgreich eingeloggt </p>";
					$link = "<a href=\"Account.html\">Zurück zur Anmeldung </a>";
					echo $ausgabe .= $link;
				}
			}

			elseif ($benutzername_input == 'TestUser') {
				if ($passwort_input == 'test') {
					$ausgabe = "<p> TestUser erfolgreich eingeloggt </p>";
					$link = "<a href=\"Account.html\">Zurück zur Anmeldung </a>";
					echo $ausgabe .= $link;
				}
			}

			else {
				$ausgabe = "<p> Benutzername oder Passwort inkorrekt </p>";
				$link = "<a href=\"Account.html\">Zurück zur Anmeldung </a>";
				echo $ausgabe .= $link;
			}
		?>
		
	</body>
</html>