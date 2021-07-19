<?php
	$datum = $_POST["Datum"];
	$uhrzeit = $_POST["Uhrzeit"];
	$personen = $_POST["Personen"];

	$tisch = "TEST";
	$zustand = "TEST";

	$tischzustand = $tisch . ", " . $zustand;

	$file = "Tischreservierungen.txt";
	$fhandle = fopen($file, "r");
	$new = fopen($file.".new", "w");

	while ($line = fgets($fhandle)) {
		if ($line == $datum) {
			fputs($new, $datum);
			fputs($new, "\n" . $tischzustand . "\n");
		}
		else {
			fputs($new, $line);
		}
	}

	fclose($fhandle);
	unlink($file);
	fclose($new);
	rename($file.".new", $file);
	header("Location: index.html");
?>