<!DOCTYPE HTML>
<html>
	<head>
		<title>Back-office</title>
        <meta charset="utf-8"/>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	</head>
	<body id="background_back">
		<?php include "headerBack.php"; ?>
		<div id="containerBack">
			<h1>Administration</h1>
			<div class="back_content back_menu">
				<div class="back_left_content">
					<div class="back_top_left_content">
						<h2>Ajouter un nouvel aliment</h2>
						<form method="post" action="trait_form_menu.php" enctype="multipart/form-data">
							<input type="text" name="AlimentNom" placeholder="Nom du plat">
							<input type="text" name="AlimentIngredients" placeholder="Ingrédients (séparés par une virgule)">
							<input type="number" name="AlimentPrixL" placeholder="Prix L">
							<input type="number" name="AlimentPrixXL" placeholder="Prix XL">
							<input type="text" name="AlimentType" placeholder="Type d'aliment (Entrée/Plat/Dessert/Boisson)">
							<input type="submit" name="Valider" value="Valider">
						</form>
					</div>
					<div class="back_bottom_left_content">
						<h2>Supprimer un menu existant</h2>
						<form method="post" action="trait_form_menu.php" enctype="multipart/form-data">
							<span class="diff_menus"></span>
							<span class="diff_menus"></span>
							<span class="diff_menus"></span>
							<label>Numéro du menu à supprimer :<br><span>(cette acion est irréverssible)</span></label>
							<input type="number" name="MenuId">
							<input type="submit" name="Valider" value="Valider">
						</form>
					</div>
				</div>
				<div class="back_right_content">
					<div class="back_top_right_content">
						<h2>Ajouter un nouveau menu</h2>
						<form method="post" action="trait_form_menu.php" enctype="multipart/form-data">
							<input type="text" name="MenuNom" placeholder="Nom de la formule">
							<input type="number" name="MenuPrixL" placeholder="Prix L">
							<input type="number" name="MenuPrixXL" placeholder="Prix XL">
							<select name="MenuEntree">
								<optgroup label="Entrée">
									<option value="Samoussa">Samoussa</option>
									<option value="Bonbon">Bonbon piment</option>
								</optgroup>
							</select>
							<select name="MenuPlat">
								<optgroup label="Plat">
									<option value="Rougail">Rougail saucisse</option>
									<option value="Carry">Carry poulet</option>
								</optgroup>
							</select>
							<select name="MenuDessert">
								<optgroup label="Dessert">
									<option value="Fruits">Fruits exotiques</option>
									<option value="Patisserie">Pâtisserie</option>
								</optgroup>
							</select>
							<select name="MenuBoisson">
								<optgroup label="Boisson">
									<option value="Bière">Bière Dodo</option>
									<option value="Vin">Vin de Loire</option>
									<option value="Eau">Eau</option>
									<option value="Soda">Soda</option>
								</optgroup>
							</select>
							<input type="submit" name="Valider" value="Valider">
						</form>
					</div>
				</div>
			</div>
			<div class="back_content back_article">
				<div class="back_left_content">
					<div class="back_top_left_content">
						<h2>Ajouter un nouvel article</h2>
						<form method="post" action="trait_form_article.php" enctype="multipart/form-data">
							<input type="text" name="ArticleTitre" placeholder="Titre de l'article">
							<input type="text" name="ArticleImgSource" placeholder="Source de l'image">
							<input type="text" name="ArticleAuteur" placeholder="Auteur">
							<input type="date" name="ArticleDate" placeholder="Date">
							<textarea name="ArticleContenu" placeholder="Contenu de votre article"></textarea>
							<input type="submit" name="Valider" value="Valider">
						</form>
					</div>
				</div>
				<div class="back_right_content">
					<div class="back_top_right_content">
						<h2>Supprimer un article existant</h2>
						<form method="post" action="trait_form_article.php" enctype="multipart/form-data">
							<span class="diff_articles"></span>
							<span class="diff_articles"></span>
							<span class="diff_articles"></span>
							<label>Numéro de l'article à supprimer :<br><span>(cette acion est irréverssible)</span></label>
							<input type="number" name="ArticleId">
							<input type="submit" name="Valider" value="Valider">
						</form>
					</div>
				</div>
			</div>
			<div class="back_content back_partenaire">
				<div class="back_left_content">
					<div class="back_top_left_content">
					<h2>Ajouter un nouveau partenaire</h2>
						<form method="post" action="trait_form_partenaire.php" enctype="multipart/form-data">
							<input type="text" name="PartenaireNom" placeholder="Nom du partenaire">
							<input type="text" name="PartenaireLogoSource" placeholder="Source du Logo partenaire (si existant)">
							<input type="text" name="PartenaireAdresse" placeholder="Adresse du partenaire">
							<textarea name="PartenaireDescription" placeholder="Description de votre partenaire"></textarea>
							<input type="submit" name="Valider" value="Valider">
						</form>
					</div>
				</div>
				<div class="back_right_content">
					<div class="back_top_right_content">
						<h2>Supprimer un partenaire existant</h2>
						<form method="post" action="trait_form_partenaire.php" enctype="multipart/form-data">
							<span class="diff_partenaires"></span>
							<span class="diff_partenaires"></span>
							<span class="diff_partenaires"></span>
							<label>Numéro du partenaire à supprimer :<br><span>(cette acion est irréverssible)</span></label>
							<input type="number" name="PartenaireId">
							<input type="submit" name="Valider" value="Valider">
						</form>
					</div>
				</div>
			</div>
			<div class="back_content back_equipe">
				<div class="back_left_content">
					<div class="back_top_left_content">
					<h2>Ajouter un collègue</h2>
						<form method="post" action="trait_form_equipe.php" enctype="multipart/form-data">
							<input type="text" name="CollegueNom" placeholder="Nom du collègue">
							<input type="text" name="ColleguePrenom" placeholder="Prénom du collègue">
							<input type="text" name="CollegueImgSource" placeholder="Source de l'image de profil">
							<textarea name="CollegueDescription" placeholder="Description de votre collègue"></textarea>
							<input type="submit" name="Valider" value="Valider">
						</form>
					</div>
				</div>
				<div class="back_right_content">
					<div class="back_top_right_content">
						<h2>Supprimer un collègue existant</h2>
						<form method="post" action="trait_form_equipe.php" enctype="multipart/form-data">
							<span class="diff_collegues"></span>
							<span class="diff_collegues"></span>
							<span class="diff_collegues"></span>
							<label>Numéro du collègue à supprimer :<br><span>(cette acion est irréverssible)</span></label>
							<input type="number" name="CollegueId">
							<input type="submit" name="Valider" value="Valider">
						</form>
					</div>
				</div>
			</div>
			<div class="back_content back_evenement">
				<div class="back_left_content">
					<div class="back_top_left_content">
						<h2>Ajouter un nouvel évenement</h2>
						<form method="post" action="trait_form_event.php" enctype="multipart/form-data">
							<input type="text" name="EventTitre" placeholder="Titre de l'évenement">
							<input type="text" name="EventImgSource" placeholder="Source de l'image">
							<input type="date" name="EventType" placeholder="Type d'évenement">
							<textarea name="EventDescription" placeholder="Description de l'évenement"></textarea>
							<input type="submit" name="Valider" value="Valider">
						</form>
					</div>
				</div>
				<div class="back_right_content">
					<div class="back_top_right_content">
						<h2>Supprimer un évenement existant</h2>
						<form method="post" action="trait_form_event.php" enctype="multipart/form-data">
							<span class="diff_events"></span>
							<span class="diff_events"></span>
							<span class="diff_events"></span>
							<label>Numéro de l'évenement à supprimer :<br><span>(cette acion est irréverssible)</span></label>
							<input type="number" name="EventId">
							<input type="submit" name="Valider" value="Valider">
						</form>
					</div>
				</div>
			</div>
			<div class="back_content back_autre">
				<div class="back_left_content">
					<div class="back_top_left_content">
						<h2>Ajouter un nouveau texte</h2>
						<form method="post" action="trait_form_texte.php" enctype="multipart/form-data">
							<select name="PageText">
								<optgroup label="Page concernée">
									<option value="Accueil">Accueil</option>
									<option value="Menu">Nos menus</option>
									<option value="Event">Prestations privées</option>
									<option value="About">A propos de nous</option>
									<option value="Blog">Actualités</option>
									<option value="Contact">Contact</option>
								</optgroup>
							</select>
							<textarea name="AutreTextContenu" placeholder="Contenu"></textarea>
							<input type="submit" name="Valider" value="Valider">
						</form>
					</div>
					<div class="back_bottom_left_content">
						<h2>Modifier un texte existant</h2>
						<form method="post" action="trait_form_texte.php" enctype="multipart/form-data">
							<select name="PageText">
								<optgroup label="Page concernée">
									<option value="Accueil">Accueil</option>
									<option value="Menu">Nos menus</option>
									<option value="Event">Prestations privées</option>
									<option value="About">A propos de nous</option>
									<option value="Blog">Actualités</option>
									<option value="Contact">Contact</option>
								</optgroup>
							</select>
							<select name="DebutText">
								<optgroup label="Texte concerné">
									<option value="Id1">1 - "Début du premier texte ..."</option>
									<option value="Id2">2 - "Début du deuxième texte ..."</option>
									<option value="Id3">3 - "Début du troisième texte ..."</option>
								</optgroup>
							</select>
							<textarea name="AutreTextContenu">Contenu du texte existant (à modifier)</textarea>
							<input type="submit" name="Valider" value="Valider">
						</form>
					</div>
				</div>
				<div class="back_right_content">
					<div class="back_top_right_content">
					<h2>Ajouter une nouvelle image</h2>
						<form method="post" action="trait_form_image.php" enctype="multipart/form-data">
							<select name="PageImg">
								<optgroup label="Page concernée">
									<option value="Accueil">Accueil</option>
									<option value="Menu">Nos menus</option>
									<option value="Event">Prestations privées</option>
									<option value="About">A propos de nous</option>
									<option value="Blog">Actualités</option>
									<option value="Contact">Contact</option>
								</optgroup>
							</select>
							<input type="text" name="ImgSource" placeholder="Source">
							<input type="text" name="ImgNom" placeholder="Nom de l'image">
							<input type="submit" name="Valider" value="Valider">
						</form>
					</div>
					<div class="back_bottom_right_content">
					<h2>Modifier une image existante</h2>
						<form method="post" action="trait_form_image.php" enctype="multipart/form-data">
							<select name="PageImg">
								<optgroup label="Page concernée">
									<option value="Accueil">Accueil</option>
									<option value="Menu">Nos menus</option>
									<option value="Event">Prestations privées</option>
									<option value="About">A propos de nous</option>
									<option value="Blog">Actualités</option>
									<option value="Contact">Contact</option>
								</optgroup>
							</select>
							<select name="ImgNom">
								<optgroup label="Image concernée">
									<option value="Id1">1 - "Nom de la première image"</option>
									<option value="Id2">2 - "Nom de la deuxième image"</option>
									<option value="Id3">3 - "Nom de la troisième image"</option>
								</optgroup>
							</select>
							<input type="text" name="ImgSource" placeholder="Source de l'image existante">
							<input type="submit" name="Valider" value="Valider">
						</form>
					</div>
				</div>
			</div>
			<div class="back_content back_contact active">
				<!--<iframe id="boite_mail" src="https://www.google.com/intl/fr/gmail/about/"></iframe>-->
				<?php
					try
					{
						$bdd = new PDO('mysql:host=localhost;dbname=food_truck;charset=utf8', 'root', '');
					}
					catch(Exception $e)
					{
					        die('Erreur : '.$e->getMessage());
					}
					$messagereponse = $bdd->query('SELECT * FROM message');
					while ($messagedonnees = $messagereponse->fetch())
					{
				?>
				<div class="contactMessage ">
					<div class="messageHeader">
						<div class="messageHeaderLeft">
							<p><?php echo $messagedonnees['messageNomEnvoyeur']; ?></p>
						</div>
						<div class="messageHeaderRight">
							<p><?php echo $messagedonnees['messageObjet']; ?></p>
							<!--<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="caret_down" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 292.362 292.362" style="enable-background:new 0 0 292.362 292.362;" xml:space="preserve">
								<g><path d="M286.935,69.377c-3.614-3.617-7.898-5.424-12.848-5.424H18.274c-4.952,0-9.233,1.807-12.85,5.424   C1.807,72.998,0,77.279,0,82.228c0,4.948,1.807,9.229,5.424,12.847l127.907,127.907c3.621,3.617,7.902,5.428,12.85,5.428   s9.233-1.811,12.847-5.428L286.935,95.074c3.613-3.617,5.427-7.898,5.427-12.847C292.362,77.279,290.548,72.998,286.935,69.377z" fill="#FFFFFF"/></g>
							</svg>-->
						</div>
					</div>
					<div class="messageBody">
						<div class="messageBodyInfos">
							<p><a href="mailto:chezfifi.resto@gmail.com"><?php echo $messagedonnees['messageMail']; ?></a> | <a href="tel:<?php echo $messagedonnees['messageTel']; ?>"><?php echo $messagedonnees['messageTel']; ?></a></p>
						</div>
						<div class="messageBodyContent">
							<p><?php echo $messagedonnees['messageContenu']; ?></p>
						</div>
					</div>
				</div>
				<?php
					}
					$messagereponse->closeCursor();
				?>
			</div>
			<div class="back_content back_reseau">
				<span>Cette page est en cours de développement</span>
			</div>
		</div>
	</body>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		/* --- Script header --- */
		$('.btn_back_menu').click(function(){
			$('.btn_header_back').removeClass('actif');
			$(this).addClass('actif');
			$('.back_content').removeClass('active');
			$('.back_menu').addClass('active');
		});
		$('.btn_back_article').click(function(){
			$('.btn_header_back').removeClass('actif');
			$(this).addClass('actif');
			$('.back_content').removeClass('active');
			$('.back_article').addClass('active');
		});
		$('.btn_back_partenaire').click(function(){
			$('.btn_header_back').removeClass('actif');
			$(this).addClass('actif');
			$('.back_content').removeClass('active');
			$('.back_partenaire').addClass('active');
		});
		$('.btn_back_equipe').click(function(){
			$('.btn_header_back').removeClass('actif');
			$(this).addClass('actif');
			$('.back_content').removeClass('active');
			$('.back_equipe').addClass('active');
		});
		$('.btn_back_evenement').click(function(){
			$('.btn_header_back').removeClass('actif');
			$(this).addClass('actif');
			$('.back_content').removeClass('active');
			$('.back_evenement').addClass('active');
		});
		$('.btn_back_autre').click(function(){
			$('.btn_header_back').removeClass('actif');
			$(this).addClass('actif');
			$('.back_content').removeClass('active');
			$('.back_autre').addClass('active');
		});
		$('.btn_back_contact').click(function(){
			$('.btn_header_back').removeClass('actif');
			$(this).addClass('actif');
			$('.back_content').removeClass('active');
			$('.back_contact').addClass('active');
		});
		$('.btn_back_reseau').click(function(){
			$('.btn_header_back').removeClass('actif');
			$(this).addClass('actif');
			$('.back_content').removeClass('active');
			$('.back_reseau').addClass('active');
		});
		/* --- Script Contact --- */
		$('.contactMessage').click(function(){
			$(this).toggleClass('visibleBody');
		});
	</script>
</html>