<?php
	$benutzername_input = $_POST["Benutzername_registration"];
	$passwort_input = $_POST["Passwort_registration"];
	$passwort_validation = $_POST["Passwort_Valid"];

	$file = "Anmeldedaten.txt";
	$fhandle = fopen($file, "a");

	if($passwort_input == $passwort_validation)
	{
		$benutzername = sprintf("\n%s", $benutzername_input);
		$passwort = sprintf("\n%s", $passwort_input);
		fputs($fhandle, $benutzername);
		fputs($fhandle, $passwort);
		sleep(1);
		header("Location: Account_registriert.html");
	}
	else
	{
		sleep(1);
		header("Location: Account.html");
	}
	
?>