<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3c.org/TR/html4/strict.dtd"> <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3c.org/TR/html4/strict.dtd"> 
<html> 
	<head> 
		<title>Island Grill-Account</title> 
	</head> 
	<body>
		<link rel="stylesheet" type="text/css" href="Stylesheet.css">
		<h1> Account </h1>
		<div style="margin-left: 14%; margin-top: 2%">
			<div> <a href="Startpage.html"> Home </a> </div>
			<div class="leiste" style="margin-left: 20%"> <a href="Speisekarte.html"> Speisekarte </a> </div>
			<div class="leiste" style="margin-left: 40%"> <a href="Bestellen.html"> Bestellen </a> </div>
			<div class="leiste" style="margin-left: 60%"> <a href="Reservieren.html"> Reservieren </a> </div>
			<div class="leiste" style="margin-left: 80%"> <a href="Account.html"> Mein Account </a> </div>
		</div>
		
		<div style="margin-left: 42%; margin-top: 50px;"> 
			<div> 
				Name: 
				<?php 
					echo $_GET['var1'];
				?>
			</div>

			<div>
				Telefonnummer: 
				<?php 
					echo $_GET['var2']; 
				?>
			</div>

			<div> 
				Adresse: 
				<?php 
					echo $_GET['var3']; 
				?>
			</div>

			<div> 
				Zusatz: 
				<?php 
					echo $_GET['var4']; 
				?>
			</div>
			<input type="submit" value="Bearbeiten" style="margin-top: 25px;">
		</div>

		<div class="infocards">
			<div class="cards">
				<h3> Öffnungszeiten </h3>
				<p> Mo-Fr 11 Uhr - 21 Uhr </p>
				<p> Sa-So 13 Uhr - 23 Uhr </p>
			</div>
			<div style="margin-top: -128px; margin-left: 35%" class="cards">
				<h3> Anschrift </h3>
				<p> Island Grill </p>
				<p> Musterstraße 123 </p>
				<p> 12345 Stuttgart </p>
			</div>
			<div style="margin-top: -163px; margin-left: 70%" class="cards">
				<h3> Kontakt </h3>
				<p> Telefon: +49 (711)12 34 56 </p>
				<p> Fax: +49 (711) 11 22 33 </p>
				<p> E-Mail: info@island-grill.de </p>
			</div>
		</div>
	</body>
</html>