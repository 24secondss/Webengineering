<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3c.org/TR/html4/strict.dtd"> <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3c.org/TR/html4/strict.dtd"> 
<html> 
	<head>
		<meta charset="utf-8">
		<title>Island Grill-Account</title> 
		<link rel="stylesheet" type="text/css" href="styleAccount.css">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head> 
	<body>
		<div id="top">
			<div id="logo-name">Island-Grill</div>
		</div>
			
		<div class="navigation">
			<div id="navigation">
                <a href="index.html">Home</a>
                <a href="Speisekarte.html">Speisekarte</a>
                <a href="BestellSeite.html">Bestellen</a>
                <a href="Reservieren.html">Reservieren</a>
                <a href="Account.php">Mein Account</a>
                <a href="Anfahrt.html">Anfahrt</a>
                <a href="https://www.facebook.com"><img src="fb1.jpg" alt="facebook.de"></a>
            </div>
        </div>
		
		<div class="infos"> 
			<div> 
				Name: 
				<?php 
					echo $_COOKIE['Name'];
				?>
			</div>

			<div>
				Telefonnummer: 
				<?php 
					echo $_COOKIE['Telefonnummer']; 
				?>
			</div>

			<div> 
				Adresse: 
				<?php 
					echo $_COOKIE['Adresse']; 
				?>
			</div>

			<div> 
				Zusatz: 
				<?php 
					if (isset($_COOKIE['Zusatz'])) {
						echo $_COOKIE['Zusatz'];
					}
					else{
						echo "";
					}
				?>
			</div>
			<form action="Weiterleitung.php" method="post" id="Weiterleitung">
				<input type="submit" value="Bearbeiten" style="margin-left: -105px; margin-top: 25px;">
			</form>
			<form action="Abmelden.php" method="post" id="Abmelden" style="margin-top: -22px">
				<input type="submit" value="Abmelden" style="margin-left: 100px;">
			</form>
		</div>

		<div w3-include-html="footer.html"></div>
        <script type="text/javascript" src="include.js"></script>
        <script type="text/javascript">
            includeHTML();
        </script>
	</body>
</html>