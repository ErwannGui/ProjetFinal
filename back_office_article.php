<?php 
	/* --- le traitement de back-office pour les articles, events, equipe, partenaires est identique, mis à part les variables --- */

	/* --- traitement du formulaire ajout d'article --- */
    if ( isset($_POST['btn-add_article']) ) {

    	/* --- script d'upload d'image pour remplacer le champ de source à rentrer à la main --- */
    	$dossier = 'images/articles/'; // dossier où sera déplacé le fichier

		$image = basename($_FILES['ArticleImage']['name']); // nom du fichier selectionné

		$extensions = array('.png', '.gif', '.jpg', '.jpeg'); // tableau des extentions possibles
		$extension = strrchr($_FILES['ArticleImage']['name'], '.'); // récupération de l'extension du fichier
		// vérification de l'existence de l'extension du fichier dans les tableau
		if(!in_array($extension, $extensions)) 
		{
		     $errMSG_add_article = 'Vous devez uploader un fichier de type png, gif, jpg, ou jpeg.';
		} else { // si l'extension est bonne on passe à la suite du traitement du formulaire
			if(move_uploaded_file($_FILES['ArticleImage']['tmp_name'], $dossier.$image)) { // on vérifie la cohérence entre chemin temporaire, et destination pour déterminer la réussite ou l'échec
				$errMSG_upload = "Le fichier a bien été sauvegardé.";
			} else {
				$errMSG_upload = "Impossible de copier le fichier dans ".$dossier;
		        exit();
			}
	    	$imgPathArticle = $dossier.$image; // on récupère la source qu'on rentrera en bdd

	        $titreArticle = htmlspecialchars($_POST['ArticleTitre']);
	        $authorArticle = htmlspecialchars($_POST['ArticleAuteur']);
	        $dateArticle = htmlspecialchars($_POST['ArticleDate']);
	        $contentArticle = htmlspecialchars($_POST['ArticleContenu']);

	        // envoi du texte dans la table texte
	        $query = "INSERT INTO texte(texteContenu,textePage) VALUES('$contentArticle','Actualites')";
	        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error()); 

	        // envoi de la source de l'image dans la table image
	        $query = "INSERT INTO image(imageSource,imagePage) VALUES('$imgPathArticle','Actualites')";
	        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error()); 

	        // récupération de l'id du dernier texte de la table (celui inséré à la dernière requête)
	        $query = "SELECT texteId FROM texte WHERE texteId = (SELECT MAX(texteId) FROM texte)";
	        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error());
	        $texte = mysql_fetch_array($res);
			$texteId = $texte['texteId'];

			// récupération de l'id de la dernière source de la table (celle insérée à la dernière requête)
	        $query = "SELECT imageId FROM image WHERE imageId = (SELECT MAX(imageId) FROM image)";
	        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error()); 
	        $image = mysql_fetch_array($res);
			$imageId = $image['imageId'];
	 
	 		// insertion de la ligne dans la table (ici article)
	        $query = "INSERT INTO article(articleTitre,articleAuteur,articleDate,texteId,imageId) VALUES('$titreArticle','$authorArticle','$dateArticle','$texteId','$imageId')";
	        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error()); 

	        if ($res) {
	            $errTyp = "Succès";
	            $errMSG_add_article = $errMSG_upload." Le nouvel article a été enregistré.";
	            unset($titreArticle);
	            unset($imgPathArticle);
	            unset($auteurArticle);
	            unset($dateArticle);
	            unset($contentArticle);
	        } else {
	            $errTyp = "danger";
	            $errMSG_add_article = $errMSG_upload." Quelque chose a mal fonctionné, réessayez plus tard ...";
	        }
    	}
    }
?>
<div class="back_content back_article ">
	<div class="back_left_content">
		<div class="back_top_left_content">
			<h2>Ajouter un nouvel article</h2>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" enctype="multipart/form-data">
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
				<input type="file" name="ArticleImage">
				<input type="text" name="ArticleAuteur" placeholder="Auteur">
				<input type="date" name="ArticleDate" placeholder="Date de l'article (format YYYY-MM-DD)">
				<textarea name="ArticleContenu" placeholder="Contenu de votre article"></textarea>
				<input type="submit" name="btn-add_article" value="Valider">
			</form>
		</div>
	</div>
	<div class="back_right_content">
		<div class="back_top_right_content">
			<h2>Supprimer un article existant</h2>
			<!-- suppression d'élements identique à celle dans le back-menu, je ne commente donc pas -->
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

				/* --- traitement du formulaire suppression d'article --- */
			    if(isset($_POST['btn-suppr_article'])) {
				    if(! $conn ) {
				        die('Impossible de se connecter a la base de donnée: ' . mysql_error());
				    }

				    $articleId = $_POST['ArticleId'];

				    $sql = "SELECT texteId,imageId FROM article WHERE articleId = $articleId";
				    $res = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
				    $texteId_imageId = mysql_fetch_array($res);
				    $texteId = $texteId_imageId['texteId'];
					$imageId = $texteId_imageId['imageId'];

					$sql = "DELETE FROM texte WHERE texteId = $texteId" ;
				    $retval = mysql_query( $sql, $conn );

				    $sql = "DELETE FROM image WHERE imageId = $imageId" ;
				    $retval = mysql_query( $sql, $conn );

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
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" enctype="multipart/form-data">
				<label>Numéro de l'article à supprimer :<br><span>(cette action est irréverssible)</span></label>
				<input type="number" name="ArticleId">
				<input type="submit" name="btn-suppr_article" value="Valider">
			</form>
		</div>
	</div>
</div>