<!DOCTYPE html>
<?php

	$datum = $_POST["Datum"];
	$uhrzeit = $_POST["time"];
	$personen = $_POST["Personen"];

	setcookie("Datum", $datum, path:"/");
	setcookie("Uhrzeit", $uhrzeit, path:"/");
	setcookie("Personen", $personen, path:"/");

?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Tischreservierung</title>
		<link rel="stylesheet" type="text/css" href="Stylesheet.css" />
	</head>
	<body>
		<h1> Tischreservierung </h1>
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
        </div>

        <!-- DAS HIER IST BEISPIELSWEISE TISCH 1 (im Endeffekt muss so dann aber jeder Tisch aussehen, mit angepasstem Vergleich bei $tisch_reserviert (hier Zeile 65))
             Hier ein Beispiel: http://www.tommyherrmanndesign.com/nof/PHP-Feldstyle/index.php 
             So müsste es gehen, ich kanns aktuell aber nicht testen. Ganz wichtig is, dass der php-Code noch
             im öffnenden div-tag is, sonst wird des class nich an die richtige stelle geschrieben.
             Man bräuchte jetzt dann nur noch in einem der Style-Sheets die beiden Klassen, dann sollte eig alles funktionieren. -->

        <div 
        <?php 
        	$file = "Tischreservierungen.txt";
			$fhandle = fopen($file, "r");

			$i = 0;
			while ($line = fgets($fhandle)) {
				if ($line == $datum) {
					do {
						$line = fgets($fhandle);
						$logindaten[$i] = $line;
						$i++;
					} while ($line != "##########");
				}
			}

			for($j = 0; $j < $i; $j++) {
				preg_match('/(.+)(-{3})(.+)(-{3})(.+)(-{3})(.+)/', $logindaten[$j], $output_array);
				$tisch_reserviert = $output_array[1];
				$zustand_reserviert = $output_array[3];
				$uhrzeit_reserviert = $output_array[5];
				if(empty($tisch_reserviert)){			//wenn nich so, dann if($tisch_reserviert == null)
					echo 'class="frei"';
				}
				else {
					if ($tisch_reserviert == 1) {
						if ($uhrzeit_reserviert == $_COOKIE['Datum']) {
							if ($zustand_reserviert == "r") {
								echo 'class="reserviert"';
							}
						}
						break;
					}
				}
			}
			fclose($fhandle);
        ?>
        ></div>
	</body>
</html>