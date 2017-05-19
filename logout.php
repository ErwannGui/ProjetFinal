<?php

	session_start();
	
	if (!isset($_SESSION['user'])) {
		header("Location: connection.php");
	} else if(isset($_SESSION['user'])!="") {
		header("Location: back_office.php");
	}
	
	if (isset($_GET['logout'])) {
		unset($_SESSION['user']);
		session_unset();
		session_destroy();
		header("Location: connection.php");
		exit;
	}