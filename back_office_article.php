<?php 
	/* --- traitement du formulaire ajout d'article --- */
    if ( isset($_POST['btn-add_article']) ) {

        $titreArticle = htmlspecialchars($_POST['ArticleTitre']);
        $imgPathArticle = htmlspecialchars($_POST['ArticleImgSource']);
        $authorArticle = htmlspecialchars($_POST['ArticleAuteur']);
        //$dateArticle = htmlspecialchars($_POST['ArticleDate']);
        $idBis = htmlspecialchars($_POST['ArticleIdBis']);
        $contentArticle = htmlspecialchars($_POST['ArticleContenu']);

        $query = "INSERT INTO texte(texteContenu,textePage,texteIdBis) VALUES('$contentArticle','Actualités','$idBis')";
        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error()); 

        $query = "INSERT INTO image(imageSource,imagePage,imageIdBis) VALUES('$imgPathArticle','Actualités','$idBis')";
        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error()); 

        $query = "SELECT texteId FROM texte WHERE texteIdBis = $idBis";
        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error());
        $texte = mysql_fetch_array($res);
		$texteId = $texte['texteId'];

        $query = "SELECT imageId FROM image WHERE imageIdBis = $idBis";
        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error()); 
        $image = mysql_fetch_array($res);
		$imageId = $image['imageId'];
 
        $query = "INSERT INTO article(articleTitre,articleAuteur,texteId,imageId) VALUES('$titreArticle','$authorArticle','$texteId','$imageId')";
        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error()); 

        if ($res) {
            $errTyp = "Succès";
            $errMSG_add_article = "Le nouvel article a été enregistré.";
            unset($titreArticle);
            unset($imgPathArticle);
            unset($auteurArticle);
            unset($idBis);
            unset($contentArticle);
        } else {
            $errTyp = "danger";
            $errMSG_add_article = "Quelque chose a mal fonctionné, réessayez plus tard ...";
        }
    }
?>
<div class="back_content back_article ">
	<div class="back_left_content">
		<div class="back_top_left_content">
			<h2>Ajouter un nouvel article</h2>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
				<?php
                    if ( isset($errMSG_add_article) ) {
                ?>
                <div class="alert">
                    <?php echo $errMSG_add_article; ?>
                </div><br>
                <?php
                    }
                ?>
				<input type="text" name="ArticleTitre" placeholder="Titre de l'article">
				<input type="text" name="ArticleImgSource" placeholder="Source de l'image">
				<input type="text" name="ArticleAuteur" placeholder="Auteur">
				<input type="number" name="ArticleIdBis" placeholder="Numéro de l'article (à définir)">
				<!--<input type="date" name="ArticleDate" placeholder="Date de l'article">-->
				<textarea name="ArticleContenu" placeholder="Contenu de votre article"></textarea>
				<input type="submit" name="btn-add_article" value="Valider">
			</form>
		</div>
	</div>
	<div class="back_right_content">
		<div class="back_top_right_content">
			<h2>Supprimer un article existant</h2>
			<?php
			    $sql = 'SELECT articleId,articleTitre FROM article';
				$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
				while ($data = mysql_fetch_array($req)) {
			?>
			<span class="diff_articles"><?php echo $data['articleId']; ?> - <?php echo $data['articleTitre']; ?></span><br>
			<?php
				}
				mysql_free_result ($req);
				//mysql_close ();

				/* --- traitement du formulaire suppression de menu --- */
			    if(isset($_POST['btn-suppr_article'])) {
				    if(! $conn ) {
				        die('Impossible de se connecter a la base de donnée: ' . mysql_error());
				    }

				    $articleId = $_POST['ArticleId'];

				    $sql = "DELETE FROM article WHERE articleId = $articleId" ;
				    $retval = mysql_query( $sql, $conn );

				    if($retval) {
				    	$errTyp = "Succès";
            			$errMSG_suppr_article = "L'article sélectionné a été supprimé.";
				    } else {
				    	$errTyp = "danger";
            			$errMSG_suppr_article = "Quelque chose a mal fonctionné, réessayez plus tard ...";
				    }
				    

					if ( isset($errMSG_suppr_article) ) {
            ?>
            <div class="alert">
                <?php echo $errMSG_suppr_article; ?>
            </div><br>
            <?php
                    }
				}
			?>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
				<label>Numéro de l'article à supprimer :<br><span>(cette action est irréverssible)</span></label>
				<input type="number" name="ArticleId">
				<input type="submit" name="btn-suppr_article" value="Valider">
			</form>
		</div>
	</div>
</div>