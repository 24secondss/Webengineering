<?php
	$benutzername_input = $_POST["Benutzername_registration"];
	$passwort_input = $_POST["Passwort_registration"];
	$passwort_validation = $_POST["Passwort_Valid"];

	$file = "Anmeldedaten.txt";
	$fhandle = fopen($file, "a");

	if($passwort_input == $passwort_validation)
	{
		$benutzername = sprintf("%s", $benutzername_input);
		$passwort = sprintf("\n%s", $passwort_input);
		fputs($fhandle, $benutzername);
		fputs($fhandle, $passwort);
		header("Location: Account_registriert.html");
	}
	else
	{
		setcookie("Error_Reg", "Die Passwörter stimmen nicht überein!", path:"/");
		header("Location: Account.php");
	}
	
?>