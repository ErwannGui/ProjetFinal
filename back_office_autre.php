<?php 
	/* --- traitement du formulaire ajout d'un texte --- */
    if ( isset($_POST['btn-add_text']) ) {

    	// ajout d'un texte dans la table correspondante

        $page = htmlspecialchars($_POST['PageTextAdd']);
        $contenu = htmlspecialchars($_POST['AutreTextContenuAdd']);
 
        $query = "INSERT INTO texte(texteContenu,textePage) VALUES('$contenu','$page')";
        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error()); 

        if ($res) {
            $errTyp = "Succès";
            $errMSG_add_text = "Le nouveau texte a été enregistré.";
            unset($page);
            unset($contenu);
        } else {
            $errTyp = "danger";
            $errMSG_add_text = "Quelque chose a mal fonctionné, réessayez plus tard ...";
        }
    }

	/* --- traitement du formulaire modification d'un texte --- */
	if(isset($_POST['btn-select_page_txt'])) { // lors de l'envoi du formulaire de choix de page
		$selectPageTxt = htmlspecialchars($_POST['PageTextModify']); // stockage de la page choisie
	} // même chose en dessous
	if(isset($_POST['btn-select_texte'])) {
		$selectTxt = htmlspecialchars($_POST['DebutText']);
	}
    if(isset($_POST['btn-modify_text'])) {

	    $texteContenu = htmlspecialchars($_POST['AutreTextContenuModify']);

	    // modification du contanu textuel
	    $query = "UPDATE texte SET texteContenu = '$texteContenu' WHERE texteId = $selectTxt";
        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error());

        if ($res) {
            $errTyp = "Succès";
            $errMSG_modify_text = "Le texte a été modifié.";
            unset($selectPageTxt);
            unset($selectTxt);
            unset($texteContenu);
        } else {
            $errTyp = "danger";
            $errMSG_modify_text = "Quelque chose a mal fonctionné, réessayez plus tard ...";
        }
	}

    /* --- traitement du formulaire ajout d'une image --- */
    if ( isset($_POST['btn-add_image']) ) {

    	// même script d'upload
    	$dossier = 'images/'; // dossier où sera déplacé le fichier

		$image = basename($_FILES['Image']['name']);

		$extensions = array('.png', '.gif', '.jpg', '.jpeg');
		$extension = strrchr($_FILES['Image']['name'], '.');
		if(!in_array($extension, $extensions))
		{
		     $errMSG_add_image = 'Vous devez uploader un fichier de type png, gif, jpg, ou jpeg.';
		} else {
			if(move_uploaded_file($_FILES['Image']['tmp_name'], $dossier.$image)) {
				$errMSG_upload = "Le fichier a bien été sauvegardé.";
			} else {
				$errMSG_upload = "Impossible de copier le fichier dans ".$dossier;
		        exit();
			}
	    	$imgPath = $dossier.$image;

	        $page = htmlspecialchars($_POST['PageImgAdd']);
	 
	        $query = "INSERT INTO image(imageSource,imagePage) VALUES('$imgPath','$page')";
	        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error()); 

	        if ($res) {
	            $errTyp = "Succès";
	            $errMSG_add_image = $errMSG_upload." La nouvelle image a été enregistré.";
	            unset($page);
	            unset($contenu);
	        } else {
	            $errTyp = "danger";
            	$errMSG_add_image = $errMSG_upload." Quelque chose a mal fonctionné, réessayez plus tard ...";
        	}
    	}
    }

	/* --- traitement du formulaire modification d'une image --- */
	// même chose que pour le texte
	if(isset($_POST['btn-select_page_img'])) { 
		$selectPageImg = htmlspecialchars($_POST['PageImgModify']);
	}
	if(isset($_POST['btn-select_image'])) {
		$selectImg = htmlspecialchars($_POST['ImgSource']);
	}
    if(isset($_POST['btn-modify_image'])) {

	    $imgPath = htmlspecialchars($_POST['ImgSourceModify']);

	    $query = "UPDATE image SET imageSource = '$imgPath' WHERE imageId = $selectImg";
        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error());

        if ($res) {
            $errTyp = "Succès";
            $errMSG_modify_image = "L'image'a été modifié.";
            unset($selectPageImg);
            unset($selectImg);
            unset($imgPath);
        } else {
            $errTyp = "danger";
            $errMSG_modify_image = "Quelque chose a mal fonctionné, réessayez plus tard ...";
        }
	}
?>
<div class="back_content back_autre ">
	<div class="back_left_content">
		<div class="back_top_left_content">
			<h2>Ajouter un nouveau texte</h2>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" enctype="multipart/form-data">
				<?php
                    if ( isset($errMSG_add_text) ) {
                ?>
                <div class="alert">
                    <?php echo $errMSG_add_text; ?>
                </div><br>
                <?php
                    }
                ?>
				<select name="PageTextAdd">
					<optgroup label="Page concernée">
						<option value="Accueil">Accueil</option>
						<option value="Nos menus">Nos menus</option>
						<option value="Prestations privee">Prestations privées</option>
						<option value="A propos de nous">A propos de nous</option>
						<option value="Actualites">Actualités</option>
						<option value="Contact">Contact</option>
					</optgroup>
				</select>
				<textarea name="AutreTextContenuAdd" placeholder="Contenu"></textarea>
				<input type="submit" name="btn-add_text" value="Valider">
			</form>
		</div>
		<div class="back_bottom_left_content">
			<h2>Modifier un texte existant</h2>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" enctype="multipart/form-data">
				<?php
                    if ( isset($errMSG_modify_text) ) {
                ?>
                <div class="alert">
                    <?php echo $errMSG_modify_text; ?>
                </div><br>
                <?php
                    }
                ?>
				<select name="PageTextModify">
					<optgroup label="Page concernée">
						<?php
							// affichage des différentes pages où un texte existe déja
							$page = "SELECT DISTINCT textePage FROM texte";
							$req = mysql_query($page) or die('Erreur SQL !<br />'.$page.'<br />'.mysql_error()); 
							while ($pages = mysql_fetch_array($req)) {
						?>
						<!-- attribut selected défini en fonction du choix fait précedement (on à un premier envoi de formulaire et ici, au deuxième, on garde le choix fait à l'affiche) -->
						<option value="<?php echo $pages['textePage']; ?>" <?php if(isset($selectPageTxt) && $selectPageTxt == $pages['textePage']) {echo 'selected="selected"';} ?>><?php echo $pages['textePage']; ?></option>
						<?php 
							}
							mysql_free_result ($req);
							//mysql_close ();
						?>
					</optgroup>
				</select>
				<input type="submit" name="btn-select_page_txt" value="Valider">
			</form>
			<?php
        		if ( isset($selectPageTxt) ) { // formulaire qui s'affiche seulement si le précedent à été validé (ref au début du traitement de modification d'un texte/image)
            ?>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" enctype="multipart/form-data">
				<select name="DebutText">
					<optgroup label="Texte concerné">
						<?php
							// affichage des textes contanus dans la page selectionnée précedement
						    $sql = "SELECT * FROM texte WHERE textePage = '$selectPageTxt'";
							$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
							while ($data = mysql_fetch_array($req)) {
								$texteActuel = $data['texteContenu'];
								if (strlen($texteActuel)<50) { // si la longueur du texte en sorti est inférieur a 50
									$texte = $texteActuel; // garde la totalité du contenu
								} else {
								$debutTexte = substr($texteActuel, 0, 50); // garde les 50 premiers caractères ...
								$texte = $debutTexte.' ...'; // ... concatenés avec '...'
								}
						?>
						<!-- attribut selected défini en fonction du choix fait précedement (on à un premier envoi de formulaire et ici, au deuxième, on garde le choix fait à l'affiche) -->
						<option value="<?php echo $data['texteId']; ?>" <?php if(isset($selectTxt) && $selectTxt == $data['texteId']) {echo 'selected="selected"';} ?>><?php echo $data['texteId']; ?> - <?php echo $texte; ?></option>
						<?php
							}	
							mysql_free_result ($req);
							//mysql_close ();
            			?>
					</optgroup>
				</select>
				<input type="submit" name="btn-select_texte" value="Valider">
			</form>
            <?php
            	}
            	if (isset($selectTxt)) { // formulaire qui s'affiche seulement si le précedent à été validé (ref au début du traitement de modification d'un texte/image)
           	?>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" enctype="multipart/form-data">
				<?php
					// affichage du texte à modifier
				    $sql = "SELECT texteContenu FROM texte WHERE texteId = '$selectTxt'";
					$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
					while ($data = mysql_fetch_array($req)) {
						$texteActuel = $data['texteContenu'];
				?>
				<textarea name="AutreTextContenuModify"><?php echo $texteActuel; ?></textarea>
				<?php
					}	
					mysql_free_result ($req);
					//mysql_close ();
    			?>
				<input type="submit" name="btn-modify_text" value="Valider">
			</form>
            <?php
    			}
            ?>
		</div>
	</div>
	
	<!-- IDENTIQUE A L'AJOUT ET LA MODIFICATION D'UN TEXTE, SAUF LES VARIABLES -->
	<div class="back_right_content">
		<div class="back_top_right_content">
		<h2>Ajouter une nouvelle image</h2>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" enctype="multipart/form-data">
				<?php
                    if ( isset($errMSG_add_image) ) {
                ?>
                <div class="alert">
                    <?php echo $errMSG_add_image; ?>
                </div><br>
                <?php
                    }
                ?>
				<select name="PageImgAdd">
					<optgroup label="Page concernée">
						<option value="Accueil">Accueil</option>
						<option value="Nos menus">Nos menus</option>
						<option value="Prestations privee">Prestations privées</option>
						<option value="A propos de nous">A propos de nous</option>
						<option value="Actualites">Actualités</option>
						<option value="Contact">Contact</option>
				</select>
				<input type="file" name="Image">
				<input type="submit" name="btn-add_image" value="Valider">
			</form>
		</div>
		<div class="back_bottom_right_content">
			<h2>Modifier une image existante</h2>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" enctype="multipart/form-data">
			<?php
	            if ( isset($errMSG_modify_image) ) {
	        ?>
	        <div class="alert">
	            <?php echo $errMSG_modify_image; ?>
	        </div><br>
	        <?php
	            }
	        ?>
				<select name="PageImgModify">
					<optgroup label="Page concernée">
						<?php
							$page = 'SELECT DISTINCT imagePage FROM image';
							$req = mysql_query($page) or die('Erreur SQL !<br />'.$page.'<br />'.mysql_error()); 
							while ($pages = mysql_fetch_array($req)) {
						?>
						<option value="<?php echo $pages['imagePage']; ?>"><?php echo $pages['imagePage']; ?></option>
						<?php 
							}
							mysql_free_result ($req);
							//mysql_close ();
						?>
					</optgroup>
				</select>
				<input type="submit" name="btn-select_page_img" value="Valider">
			</form>
			<?php
    			if ( isset($selectPageImg) ) {
            ?>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" enctype="multipart/form-data">
				<select name="ImgSource">
					<optgroup label="Image concernée">
						<?php
						    $sql = "SELECT * FROM image WHERE imagePage = '$selectPageImg'";
							$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
							while ($data = mysql_fetch_array($req)) {
								$pathActuel = $data['imageSource'];
								$nomImage = substr($pathActuel, 7);
						?>
						<option value="<?php echo $data['texteId']; ?>"><?php echo $nomImage; ?></option>
						<?php
							}
							mysql_free_result ($req);
							//mysql_close ();
            			?>
					</optgroup>
				</select>
				<input type="submit" name="btn-select_image" value="Valider">
			</form>
			<?php
        		}
                if (isset($selectImg)) {
           	?>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" enctype="multipart/form-data">
				<?php
				    $sql = "SELECT imageSource FROM image WHERE imageId = '$selectImg'";
					$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
					while ($data = mysql_fetch_array($req)) {
						$pathActuel = $data['imageSource'];
				?>
				<textarea name="ImgSourceModify"><?php echo $pathActuel; ?></textarea>
				<?php
					}	
					mysql_free_result ($req);
					//mysql_close ();
    			?>
				<input type="submit" name="btn-modify_image" value="Valider">
			</form>
			<?php
				}
            ?>
		</div>
	</div>
</div>