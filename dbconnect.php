<?php

	// this will avoid mysql_connect() deprecation error.
	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	// but I strongly suggest you to use PDO or MySQLi.
	
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');// a modifier suivant vos identifiants serveur
	define('DBPASS', '');// a modifier suivant vos identifiants serveur
	define('DBNAME', 'food_truck');
	
	$conn = mysql_connect(DBHOST,DBUSER,DBPASS);
	$dbcon = mysql_select_db(DBNAME);
	
	if ( !$conn ) { // verification de connexion à la bdd
		die("Connection failed : " . mysql_error());
	}
	
	if ( !$dbcon ) { // verification de l'existence de la bdd
		die("Database Connection failed : " . mysql_error());
	}

	$encode = mysql_query("SET NAMES UTF8"); // oblige l'encodage des caractères dans les input en utf-8
	// sans ça nous avons des problèmes d'encodage et plusieurs caractères (apostrophes,é,è) ne sont pas pris en compte
?>
