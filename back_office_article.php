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
				<input type="submit" name="btn-suppr_article" value="Valider">
			</form>
		</div>
	</div>
</div>