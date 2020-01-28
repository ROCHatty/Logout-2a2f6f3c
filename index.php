<?php
if (!isset($_COOKIE['loggedInUser'])) {
	header("Location: login.php");
	die();
}
if (isset($_GET['logout'])) {
	setcookie("loggedInUser", '0', -1);
	header("Location: login.php");
	die();
}
?>
<a href="?logout">Logout</a>