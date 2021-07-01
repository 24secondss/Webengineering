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
				sleep(1);
				$j++;
				header("Location: Account_angemeldet");
			}
			else {
				sleep(1);
				header("Location: Account.html");
			}
		}
		$i++;
	}
	sleep(1);
	header("Location: Account.html");
?>