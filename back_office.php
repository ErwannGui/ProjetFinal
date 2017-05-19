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
			<div class="back_content back_menu active">
				<div class="back_left_content">
					<div class="back_top_left_content">
						<h2>Ajouter un nouvel aliment</h2>
						<form method="post" action="">
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
						<form method="post" action="">
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
						<form method="post" action="">
							<input type="text" name="MenuNom" placeholder="Nom de la formule">
							<input type="number" name="MenuPrixL" placeholder="Prix L">
							<input type="number" name="MenuPrixXL" placeholder="Prix XL">
							<select name="MenuEntree">
								<optgroup label="Entrée">
									<option value="">Samoussa</option>
									<option value="">Bonbon piment</option>
								</optgroup>
							</select>
							<select name="MenuPlat">
								<optgroup label="Plat">
									<option value="">Rougail saucisse</option>
									<option value="">Carry poulet</option>
								</optgroup>
							</select>
							<select name="MenuDessert">
								<optgroup label="Dessert">
									<option value="">Fruits exotiques</option>
									<option value="">Pâtisserie</option>
								</optgroup>
							</select>
							<select name="MenuBoisson">
								<optgroup label="Boisson">
									<option value="">Bière Dodo</option>
									<option value="">Vin de Loire</option>
									<option value="">Eau</option>
									<option value="">Soda</option>
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
						<form method="post" action="">
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
						<form method="post" action="">
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
						<form method="post" action="">
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
						<form method="post" action="">
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
						<form method="post" action="">
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
						<form method="post" action="">
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
						<form method="post" action="">
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
						<form method="post" action="">
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
						<form method="post" action="">
							<select name="PageText">
								<optgroup label="Page concernée">
									<option value="">Accueil</option>
									<option value="">Nos menus</option>
									<option value="">Prestations privées</option>
									<option value="">A propos de nous</option>
									<option value="">Actualités</option>
									<option value="">Contact</option>
								</optgroup>
							</select>
							<textarea name="AutreTextContenu" placeholder="Contenu"></textarea>
							<input type="submit" name="Valider" value="Valider">
						</form>
					</div>
					<div class="back_bottom_left_content">
						<h2>Modifier un texte existant</h2>
						<form method="post" action="">
							<select name="PageText">
								<optgroup label="Page concernée">
									<option value="">Accueil</option>
									<option value="">Nos menus</option>
									<option value="">Prestations privées</option>
									<option value="">A propos de nous</option>
									<option value="">Actualités</option>
									<option value="">Contact</option>
								</optgroup>
							</select>
							<select name="DebutText">
								<optgroup label="Texte concerné">
									<option value="">1 - "Début du premier texte ..."</option>
									<option value="">2 - "Début du deuxième texte ..."</option>
									<option value="">3 - "Début du troisième texte ..."</option>
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
						<form method="post" action="">
							<select name="PageImg">
								<optgroup label="Page concernée">
									<option value="">Accueil</option>
									<option value="">Nos menus</option>
									<option value="">Prestations privées</option>
									<option value="">A propos de nous</option>
									<option value="">Actualités</option>
									<option value="">Contact</option>
								</optgroup>
							</select>
							<input type="text" name="ImgSource" placeholder="Source">
							<input type="text" name="ImgNom" placeholder="Nom de l'image">
							<input type="submit" name="Valider" value="Valider">
						</form>
					</div>
					<div class="back_bottom_right_content">
					<h2>Modifier une image existante</h2>
						<form method="post" action="">
							<select name="PageImg">
								<optgroup label="Page concernée">
									<option value="">Accueil</option>
									<option value="">Nos menus</option>
									<option value="">Prestations privées</option>
									<option value="">A propos de nous</option>
									<option value="">Actualités</option>
									<option value="">Contact</option>
								</optgroup>
							</select>
							<select name="ImgNom">
								<optgroup label="Image concernée">
									<option value="">1 - "Nom de la première image"</option>
									<option value="">2 - "Nom de la deuxième image"</option>
									<option value="">3 - "Nom de la troisième image"</option>
								</optgroup>
							</select>
							<input type="text" name="ImgSource" placeholder="Source de l'image existante">
							<input type="submit" name="Valider" value="Valider">
						</form>
					</div>
				</div>
			</div>
			<div class="back_content back_contact">
				<iframe id="boite_mail" src="https://www.google.com/intl/fr/gmail/about/"></iframe>
			</div>
			<div class="back_content back_reseau">
				<span>Cette page est en cours de développement</span>
			</div>
		</div>
	</body>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
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
	</script>
</html>