<?php
	setcookie("Login", "Login", time() - 3600,  path: "/");
	setcookie("Name", $name, time() - 3600, path:"/");
	setcookie("Telefonnummer", $telefonnummer,time() - 3600, path:"/");
	setcookie("Adresse", $adresse, time() - 3600, path:"/");
	setcookie("Zusatz", $zusatz, time() - 3600, path:"/");	
	setcookie("OldName", $name, time() - 3600, path:"/");	
	header("Location: Account.php");
?>