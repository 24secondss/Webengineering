<?php
	setcookie("Login", "Login", time() - 3600,  path: "/");
	header("Location: Account.php");
?>