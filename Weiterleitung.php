<?php
	$name = $_COOKIE['Name'];
	setcookie("OldName", $name, path:"/");
	setcookie("Name", $name, time() - 3600, path:"/");
	setcookie("Telefonnummer", $telefonnummer,time() - 3600, path:"/");
	setcookie("Adresse", $adresse, time() - 3600, path:"/");
	setcookie("Zusatz", $zusatz, time() - 3600, path:"/");	
	header("Location: Account_bearbeiten.html");
?>