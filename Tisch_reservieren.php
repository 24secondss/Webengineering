<?php
	$datum = $_COOKIE["Datum"];
	$uhrzeit = $_COOKIE["Uhrzeit"];
	$personen = $_COOKIE["Personen"];

	$tisch = "TEST";
	$zustand = "TEST";

	$tischzustand = $tisch . ", " . $zustand . ", " . $uhrzeit . ", " . $personen;

	$file = "Tischreservierungen.txt";
	$fhandle = fopen($file, "r");
	$new = fopen($file.".new", "w");

	$i = 0;
	while ($line = fgets($fhandle)) {
		if ($line == $datum) {
			fputs($new, $datum);
			fputs($new, "\n" . $tischzustand . "\n");
			$i = 1;
		}
		else {
			fputs($new, $line);
		}
	}
	if ($i == 0) {
		fputs($new, "\n" . $datum);
		fputs($new, "\n" . $tischzustand . "\n");
	}

	fclose($fhandle);
	unlink($file);
	fclose($new);
	rename($file.".new", $file);
	setcookie("Datum", $datum, time() - 3600,  path: "/");
	setcookie("Uhrzeit", $uhrzeit, time() - 3600,  path: "/");
	setcookie("Personen", $personen, time() - 3600,  path: "/");
	header("Location: Reservieren.html");
?>