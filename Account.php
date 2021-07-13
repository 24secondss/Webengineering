<?php
	if (isset($_COOKIE['Login'])) {
		$url="Account_angemeldet.php?var1=".$name."&var2=".$telefonnummer."&var3=".$adresse."&var4=".$zusatz."";
		$url = str_replace(PHP_EOL, '', $url);
		header("Location: $url");
	}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3c.org/TR/html4/strict.dtd">
<html> 
	<head> 
		<meta charset="utf-8">  
		<title>Island Grill-Account</title> 
	</head> 
	<body>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="Stylesheet.css">
		<h1> Account </h1>
		<div style="margin-left: 14%; margin-top: 2%">
			<div id="navigation">
                <a href="index.html">Home</a>
                <a href="Speisekarte.html">Speisekarte</a>
                <a href="BestellSeite.html">Bestellen</a>
                <a href="Reservieren.html">Reservieren</a>
                <a href="Account.php">Mein Account</a>
                <a href="Anfahrt.html">Anfahrt</a>
                <a href="https://www.facebook.com"><img src="fb1.jpg" alt="facebook.de"></a>
            </div>
		<div style="margin-top: 5%; margin-left: 35%;">
			<h3> Einloggen </h3>
			<form action="Login.php" method="post" id="Anmeldung">
				<input type="field" name="Benutzername_login" placeholder="E-Mail"> <br> <br>
				<input type="password" name="Passwort_login" placeholder="Passwort"> <br> <br>
				<input type="Submit" value="Anmelden">
			</form>
		</div>
		<div style="margin-top: -8.5%; margin-left: 60%;">
			<h3> Account anlegen </h3>
			<form action="Registration.php" method="post" id="Registration">
				<input type="field" name="Benutzername_registration" placeholder="E-Mail"> <br> <br>
				<input type="password" name="Passwort_registration" placeholder="Passwort"> <br> <br>
				<input type="password" name="Passwort_Valid" placeholder="Passwort erneut eingeben"> <br> <br>
				<input type="submit" value="Registrieren">
			</form>
		</div>
		<div w3-include-html="footer.html"></div>
        <script type="text/javascript" src="include.js"></script>
        <script type="text/javascript">
            includeHTML();
        </script>
	</body>
</html>