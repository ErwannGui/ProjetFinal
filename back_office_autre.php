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