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
	setcookie("Name", $name, path:"/");
	setcookie("Telefonnummer", $telefonnummer, path:"/");
	setcookie("Adresse", $adresse, path:"/");
	setcookie("Zusatz", $zusatz, path:"/");
	setcookie("Login", "Login", path: "/");		
	header("Location: Account_angemeldet.php");
?>