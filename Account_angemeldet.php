<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3c.org/TR/html4/strict.dtd"> <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3c.org/TR/html4/strict.dtd"> 
<html> 
	<head>
		<meta charset="utf-8">
		<title>Island Grill-Account</title> 
	</head> 
	<body>
		<link rel="stylesheet" type="text/css" href="Stylesheet.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<h1> Account </h1>
		<div style="margin-left: 14%; margin-top: 2%">
			<div> <a href="Startpage.html"> Home </a> </div>
			<div class="leiste" style="margin-left: 20%"> <a href="Speisekarte.html"> Speisekarte </a> </div>
			<div class="leiste" style="margin-left: 40%"> <a href="Bestellen.html"> Bestellen </a> </div>
			<div class="leiste" style="margin-left: 60%"> <a href="Reservieren.html"> Reservieren </a> </div>
			<div class="leiste" style="margin-left: 80%"> <a href="Account.php"> Mein Account </a> </div>
		</div>
		
		<div style="margin-left: 42%; margin-top: 50px;"> 
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
					echo $_COOKIE['Zusatz'];
				?>
			</div>
			<form action="Registration.php" method="post" id="Registration">
				<input type="submit" value="Bearbeiten" style="margin-top: 25px;">
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