<?php

Try {
    $bdd = new PDO('mysql:host=localhost;dbname=food_truck; charset=utf8', 'root', 'root');
}
catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
$bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Contact ~ Chez FIFI - Food Truck Nantais | Cuisine réunionnaise</title>
        <link rel="shortcut icon" href="images/icon/logo.ico">
        <meta charset="utf-8" title="À propos de nous" content="Le Food Truck Chez FIFI vous propose des plats typiques réunionnais, simples et issus de produits de qualité tous les midis et soirs dans la région Nantaise.">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-99582752-1', 'auto');
            ga('send', 'pageview');

        </script>
	</head>
	<body>

        <?php $page = 5;
        include "headerFront.php"; ?>

        <div id="container">

            <div id="contactBackground">

                <div id="contactBackgroundImage"></div>
                <div class="backgroundTitle">
                    
                    
                    <?php $subtitle= $bdd->query('SELECT texteId, texteContenu FROM texte WHERE texteId=71');
                    $sub= $subtitle->fetch();?>
                    <h1><?php echo $sub['texteContenu']; ?></h1>
                    
                    
                    <?php $subtitle= $bdd->query('SELECT texteId, texteContenu FROM texte WHERE texteId=39'); 
                    $sub= $subtitle->fetch();?>
                    <h2><?php echo $sub['texteContenu']; ?></h2>
                </div>
                <div class="backgroundArrow" id="scroll_ancre">
                    <a class="js-scroll" href="#scroll_ancre"><svg enable-background="new 0 0 26 26" id="Layer_1" version="1.1" viewBox="0 0 26 26" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><polygon points="0.046,2.582 2.13,0.498 12.967,11.334 23.803,0.498 25.887,2.582 12.967,15.502  "/><polygon points="0.046,13.582 2.13,11.498 12.967,22.334 23.803,11.498 25.887,13.582 12.967,26.502"/></g></svg></a>
                </div>
            </div>

            <section class="adress" id="scroll_ancre">
            	<div class="adress_table">
            		<div class="day mardi">
            			<h3>Mardi</h3>
            			<h4>141 Route de Clisson, 44230 Saint-Sébastien-sur-Loire</h4>
            			<p>Midi :</p>
            			<p>11h30 - 14h30</p>
            			<p>Soir :</p>
            			<p>19h30 - 22h30</p>
            		</div>
            		<div class="day mercredi">
            			<h3>Mercredi</h3>
            			<h4>1 Rue Ordronneau, 44400 Rezé</h4>
            			<p>Midi :</p>
            			<p>11h30 - 14h30</p>
            			<p>Soir :</p>
            			<p>19h30 - 22h30</p>
            		</div>
            		<div class="day jeudi">
            			<h3>Jeudi</h3>
                        <h4>Boulevard Salvador Allende, 44800 Saint-Herblain</h4>
            			<p>Midi :</p>
            			<p>11h30 - 14h30</p>
            			<p>Soir :</p>
            			<p>19h30 - 22h30</p>
            		</div>
            		<div class="day vendredi">
            			<h3>Vendredi</h3>
                        <h4>Parc des Chantiers, Boulevard Léon Bureau, 44200 Nantes</h4>
            			<p>Midi :</p>
            			<p>11h30 - 14h30</p>
            			<p>Soir :</p>
            			<p>19h30 - 22h30</p>
            		</div>
            		<div class="day week-end">
            			<h3>Samedi - Dimanche</h3>
            			<h4>Adresse complète </h4>
            			<p>Réservé au évenements privés</p>
            		</div>
            	</div>
            </section>

            <section class="map">
            	<div id="map"></div>
            </section>

            <section class="formContact">
            	<p>Contactez nous par mail sur <a href="mailto:chezfifi.resto@gmail.com">chezfifi.resto@gmail.com</a> ou par télephone au <a href="tel:0600000000">06 00 00 00 00</a>.</p>
            	<p>Vous pouvez aussi nous contacter directement via ce formulaire.</p>
            	<form method="post" action="trait_form_contact.php" enctype="multipart/form-data">
            		<?php
                        // à partir du moment où les input sont remplis (et validés) un cookie est créé
	                    if (isset($_POST['Nom'])) {
	                        setcookie($_POST['nom']); // identique à $_COOKIE['nom'] = $_POST['nom'];
	                    }
	                    if (isset($_POST['Prenom'])) {
	                        setcookie($_POST['prenom']);
	                    }
	                    if (isset($_POST['Mail'])) {
	                        setcookie($_POST['mail']);
	                    }
	                    if (isset($_POST['Tel'])) {
	                        setcookie($_POST['tel']);
	                    }
	                    if (isset($_POST['Objet'])) {
	                        setcookie($_POST['obejt']);
	                    }
	                    if (isset($_POST['Message'])) {
	                        setcookie($_POST['message']);
	                    }
                    ?>
            		<div class="leftForm">
            			<input type="text" name="Nom" placeholder="Nom" required="required">
            			<input type="text" name="Prenom" placeholder="Prénom" required="required">
            			<input type="email" name="Mail" placeholder="Adresse mail" required="required">
            			<input type="tel" name="Tel" placeholder="Numéro de téléphone" required="required">
            			<select name="Objet">
							<optgroup label="Objet du message">
								<option value="Prestation privée">Prestation privée</option>
								<option value="Autre">Autre</option>
							</optgroup>
						</select>
            		</div>
            		<div class="rightForm">
            			<textarea name="Message" placeholder="Message" required="required"></textarea>
            			<input type="submit" name="Envoyer" value="Envoyer">
            		</div>
            	</form>
            </section>
        </div>  
        <script type="text/javascript" src="js/map_contact.js"></script>
        <?php include "footer.php"; ?>
        <a href="#" class="top"><img src="images/trash/fleche.png" title="Retour en haut"/></a>
    </body>
</html>