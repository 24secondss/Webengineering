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
				$url="Account_angemeldet.php?var1=".$name."&var2=".$telefonnummer."&var3=".$adresse."&var4=".$zusatz."";
				$url = str_replace(PHP_EOL, '', $url);
				header("Location: $url");
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