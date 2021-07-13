<?php
	$name_input = $_POST["Name"];
	$telefonnummer_input = $_POST["Telefonnummer"];
	$adresse_input = $_POST["Adresse"];
	$zusatz_input = $_POST["Zusatz"];

	$file = "Anmeldedaten.txt";
	$fhandle = fopen($file, "a");

	$name = sprintf("\n%s", $name_input);
	$telefonnummer = sprintf("\n%s", $telefonnummer_input);
	$adresse = sprintf("\n%s", $adresse_input);
	$zusatz = sprintf("\n%s", $zusatz_input);
	fputs($fhandle, $name);
	fputs($fhandle, $telefonnummer);
	fputs($fhandle, $adresse);
	fputs($fhandle, $zusatz);
	$url="Account_angemeldet.php?var1=".$name_input."&var2=".$telefonnummer_input."&var3=".$adresse_input."&var4=".$zusatz_input."";
	$url = str_replace(PHP_EOL, '', $url);
	header("Location: $url");
?>