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
				<input type="submit" name="btn-suppr_equipe" value="Valider">
			</form>
		</div>
	</div>
</div>