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

			$file = "Anmeldedaten.txt";
			$fhandle = fopen($file, "r");

			$i = 0;
			$j = 0;
			while ($line = fgets($fhandle)) {
				$logindaten[$i] = $line;
				if ($benutzername_input == trim($logindaten[$i])) {
					$logindaten[$i + 1] = fgets($fhandle);
					if ($passwort_input == trim($logindaten[$i + 1])) {
						$ausgabe = "<p> Erfolgreich eingeloggt </p>";
						$link = "<a href=\"Account.html\">Zurück zur Anmeldung </a>";
						echo $ausgabe .= $link;	
						$j++;
					}
					else {
						$ausgabe = "<p> Passwort ungültig </p>";
						$link = "<a href=\"Account.html\">Zurück zur Anmeldung </a>";
						echo $ausgabe .= $link;	
					}
				}
				$i++;
			}
			
			if ($j == 0) {
				$ausgabe = "<p> Benutzername ungültig </p>";
				$link = "<a href=\"Account.html\">Zurück zur Anmeldung </a>";
				echo $ausgabe .= $link;
			}
		?>

	</body>
</html>