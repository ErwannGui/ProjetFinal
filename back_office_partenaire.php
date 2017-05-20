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
				<input type="submit" name="btn-suppr_partenaire" value="Valider">
			</form>
		</div>
	</div>
</div>