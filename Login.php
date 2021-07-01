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
				header("Location: Account_angemeldet.html");
			}
			else {
				header("Location: Account.html");
			}
		}
		$i++;
	}
			
	if ($j == 0) {
		header("Location: Account.html");
	}
?>