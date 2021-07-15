<?php
	$benutzer = $_COOKIE['OldName'];
	$name_input = $_POST["Name"];
	$telefonnummer_input = $_POST["Telefonnummer"];
	$adresse_input = $_POST["Adresse"];
	$zusatz_input = $_POST["Zusatz"];

	$name = sprintf("%s", $name_input);
	$telefonnummer = sprintf("\n%s", $telefonnummer_input);
	$adresse = sprintf("\n%s", $adresse_input);

	if (is_null($zusatz_input)) {
		$zusatz = sprintf("\n ");
		$zusatzCookie = " ";
	}
	else {
		$zusatz = sprintf("\n%s", $zusatz_input);
	}

	$file = "Anmeldedaten.txt";
	$fhandle = fopen($file, "r");
	$new = fopen($file.".new", "w");

	while ($line = fgets($fhandle)) {
		if ($line == $benutzer) {
			fputs($new, $name);
			fputs($new, $telefonnummer);
			fputs($new, $adresse);
			fputs($new, $zusatz);
			for ($i=0; $i < 4 ; $i++) { 
				$line = fgets($fhandle);5
			}
		}
		else {
			fputs($new, $line);
		}
	}

	fclose($fhandle);
	unlink($file);
	fclose($new);
	rename($file.".new", $file);
	setcookie("Name", $name_input, path:"/");
	setcookie("Telefonnummer", $telefonnummer_input, path:"/");
	setcookie("Adresse", $adresse_input, path:"/");
	setcookie("Zusatz", $zusatzCookie, path:"/");
	header("Location: Account_angemeldet.php");
?>
