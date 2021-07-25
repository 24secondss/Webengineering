<!DOCTYPE html SYSTEM "about:legacy-compat">
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
		<link rel="stylesheet" type="text/css" href="StyleReservieren.css" />
	</head>
	<body>
		<center><h1> Tischreservierung </h1></center>
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

		<br></br>
		<br></br>
		
		<form action="Tisch_reservieren.php" method="post" id="Tischnummer">
			<center>
			<h3>Zur Vervollst&auml;ndigung Ihrer Reservierung w&auml;hlen Sie bitte noch einen Tisch aus:</h3>
			
			<table>
				<tr>
					<td> 
						<div width="25" height="35" align="center"
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
						> 1<br><input name="Tisch[]" type="checkbox" value="1">
						</div> 
					</td>
					<td> 
						<div width="25" height="35" align="center"
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
										if ($tisch_reserviert == 2) {
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
						> 2<br><input name="Tisch[]" type="checkbox" value="2">
						</div> 
					</td>
					<td> 
						<div width="25" height="35" align="center"
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
										if ($tisch_reserviert == 3) {
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
						> 3<br><input name="Tisch[]" type="checkbox" value="3"
						</div> 
					</td>
					<td> 
						<div width="25" height="35" align="center"
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
										if ($tisch_reserviert == 4) {
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
						> 4<br><input name="Tisch[]" type="checkbox" value="4">
						</div> 
					</td>
					<td> 
						<div width="25" height="35" align="center"
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
										if ($tisch_reserviert == 5) {
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
						> 5<br><input name="Tisch[]" type="checkbox" value="5">
						</div> 
					</td>
					<td> 
						<div width="25" height="35" align="center"
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
										if ($tisch_reserviert == 6) {
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
						> 6<br><input name="Tisch[]" type="checkbox" value="6">	
						</div> 
					</td>
					<td> 
						<div width="25" height="35" align="center"
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
										if ($tisch_reserviert == 7) {
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
						> 7<br><input name="Tisch[]" type="checkbox" value="7">	
						</div> 
					</td>
					<td> 
						<div width="25" height="35" align="center"
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
										if ($tisch_reserviert == 8) {
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
						> 8<br><input name="Tisch[]" type="checkbox" value="8">	
						</div> 
					</td>
					<td> 
						<div width="25" height="35" align="center"
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
										if ($tisch_reserviert == 9) {
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
						> 9<br><input name="Tisch[]" type="checkbox" value="9">	
						</div> 
					</td>
					<td> 
						<div width="25" height="35" align="center"
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
										if ($tisch_reserviert == 10) {
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
						> 10<br><input name="Tisch[]" type="checkbox" value="10">	
						</div> 
					</td>
				</tr>
			</table>
			</center>
			<p align="center">
				<input type="submit" name="Submit" value="reservieren">
			</p>
			<script>
				function cc(){
					var inputs=document.getElementsByTagName('input'), i=0, inp, c;
					var n = 0;
					while(inp=inputs[i++]){
   						if(inp.type=='checkbox'){
     						c=inp.checked?'checked':'unchecked';
     						if(c=='checked'){
       							n++;
    						}
   						}
 					}
 					if(n==0){
    					alert("Hoppala!\nDa wurde kein Tisch ausgew&auml;hlt!\nBitte w&auml;hlen Sie Ihren Tisch aus.");
    					return false;
 					}else{
    					return true;
 					}
				}
			</script>
		</form>
	</body>
</html>