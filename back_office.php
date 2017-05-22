<?php 
    ob_start();
    session_start();
    include_once 'dbconnect.php';
?>
<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<title>Back-office</title>
        <meta charset="utf-8"/>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/admin.css" rel="stylesheet" type="text/css" media="all"/>
	</head>
	<body id="background_back">
		<?php include "headerBack.php"; ?>
		<div id="containerBack">
			<h1>Administration</h1>
			<?php include "back_office_menu.php"; ?>
			<?php include "back_office_article.php"; ?>
			<?php include "back_office_partenaire.php"; ?>
			<?php include "back_office_equipe.php"; ?>
			<?php include "back_office_event.php"; ?>
			<?php include "back_office_autre.php"; ?>
			<?php include "back_office_contact.php"; ?>
			<?php include "back_office_reseau.php"; ?>
		</div>
	</body>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/back_office.js"></script>
</html>
<?php ob_end_flush(); ?>