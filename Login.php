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
				$j++;
				$name = trim(fgets($fhandle));
				$telefonnummer = trim(fgets($fhandle));
				$adresse = trim(fgets($fhandle));
				$zusatz = trim(fgets($fhandle));
				setcookie("Name", $name, path:"/");
				setcookie("Telefonnummer", $telefonnummer, path:"/");
				setcookie("Adresse", $adresse, path:"/");
				setcookie("Zusatz", $zusatz, path:"/");
				setcookie("Login", "Login", path: "/");		
				header("Location: Account_angemeldet.php");
			}
			else {
				setcookie("Error", "Der Benutzername oder das Passwort ist falsch!", path:"/");
				header("Location: Account.php");
			}
		}
		$i++;
	}
			
	if ($j == 0) {
		setcookie("Error", "Der Benutzername oder das Passwort ist falsch!", path:"/");
		header("Location: Account.php");
	}
?>