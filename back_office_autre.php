<?php 
	/* --- traitement du formulaire ajout d'un texte --- */
    if ( isset($_POST['btn-add_text']) ) {

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
	if(isset($_POST['btn-select_page_txt'])) {
		$selectPageTxt = htmlspecialchars($_POST['PageTextModify']);
	}
    if(isset($_POST['btn-modify_text'])) {

        $textExistant = htmlspecialchars($_POST['DebutText']);
	    $texteContenu = $_POST['AutreTextContenuModify'];

	    $query = "UPDATE texte SET texteContenu = '$texteContenu' WHERE texteId = $textExistant";
        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error());

        if ($res) {
            $errTyp = "Succès";
            $errMSG_modify_text = "Le texte a été modifié.";
            unset($PageTextModify);
            unset($textExistant);
            unset($AutreTextContenuModify);
        } else {
            $errTyp = "danger";
            $errMSG_modify_text = "Quelque chose a mal fonctionné, réessayez plus tard ...";
        }
	}

    /* --- traitement du formulaire ajout d'une image --- */
    if ( isset($_POST['btn-add_image']) ) {

        $page = htmlspecialchars($_POST['PageImgAdd']);
        $imgPath = htmlspecialchars($_POST['ImgSourceAdd']);
 
        $query = "INSERT INTO image(imageSource,imagePage) VALUES('$imgPath','$page')";
        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error()); 

        if ($res) {
            $errTyp = "Succès";
            $errMSG_add_image = "La nouvelle image a été enregistré.";
            unset($page);
            unset($contenu);
        } else {
            $errTyp = "danger";
            $errMSG_add_image = "Quelque chose a mal fonctionné, réessayez plus tard ...";
        }
    }

    /* --- upload d'une image dans le dossier images --- */
    if (isset($_POST['upload'])) { // si formulaire soumis
	    $content_dir = 'images/'; // dossier où sera déplacé le fichier

	    $tmp_file = $_FILES['fichier']['tmp_name'];

	    if (!is_uploaded_file($tmp_file)) {
	        exit("Le fichier est introuvable.");
	    }

	    // on vérifie maintenant l'extension
	    $type_file = $_FILES['fichier']['type'];

	    if (!strstr($type_file, 'jpg') && !strstr($type_file, 'png') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'bmp') && !strstr($type_file, 'gif')){
	    	$errMSG_upload = "Le fichier n'est pas une image. Choisissez une image.";
	        exit();
	    }

	    // on copie le fichier dans le dossier de destination
	    $name_file = $_FILES['fichier']['name'];

	    if (!move_uploaded_file($tmp_file, $content_dir.$name_file)) {
	    	$errMSG_upload = "Impossible de copier le fichier dans ".$content_dir;
	        exit();
	    } else {
	    	$errMSG_upload = "Le fichier a bien été sauvegardé.";
	    }
	    $imgPath=$content_dir.$name_file;
	}

	/* --- traitement du formulaire modification d'une image --- */
	if(isset($_POST['btn-select_page_img'])) {
		$selectPageImg = htmlspecialchars($_POST['PageImgModify']);
	}
    if(isset($_POST['btn-modify_image'])) {

		$page = htmlspecialchars($_POST['PageImgModify']);
        $imgPathExistant = htmlspecialchars($_POST['ImgSource']);
	    $imgPath = $_POST['ImgSourceModify'];

	    $query = "UPDATE image SET imageSource = '$imgPath' WHERE imageId = $imgPathExistant";
        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error());

        if ($res) {
            $errTyp = "Succès";
            $errMSG_modify_image = "L'image'a été modifié.";
            unset($PageTextModify);
            unset($textExistant);
            unset($AutreTextContenuModify);
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
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
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
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
				<select name="PageTextModify">
					<optgroup label="Page concernée">
						<?php
							$page = "SELECT DISTINCT textePage FROM texte";
							$req = mysql_query($page) or die('Erreur SQL !<br />'.$page.'<br />'.mysql_error()); 
							while ($pages = mysql_fetch_array($req)) {
						?>
						<option value="<?php echo $pages['textePage']; ?>"><?php echo $pages['textePage']; ?></option>
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
                    if ( isset($selectPageTxt) ) {
                ?>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
				<?php
                    if ( isset($errMSG_modify_text) ) {
                ?>
                <div class="alert">
                    <?php echo $errMSG_modify_text; ?>
                </div><br>
                <?php
                    }
                ?>
				<select name="DebutText">
					<optgroup label="Texte concerné">
						<?php
						    $sql = "SELECT * FROM texte WHERE textePage = '$selectPageTxt'";
							$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
							while ($data = mysql_fetch_array($req)) {
								$texteActuel = $data['texteContenu'];
								$debutTexte = substr($texteActuel, 0, 15);
								$texte = $debutTexte.' ...';
						?>
						<option value="<?php echo $data['texteId']; ?>"><?php echo $data['texteId']; ?> - <?php echo $texte; ?></option>
						<?php
								mysql_free_result ($req);
							}
							//mysql_close ();
            			?>
					</optgroup>
				</select>
				<textarea name="AutreTextContenuModify"><?php echo $texteActuel; ?></textarea>
				<input type="submit" name="btn-modify_text" value="Valider">
			</form>
            <?php
                   	}
            ?>
		</div>
	</div>
	<div class="back_right_content">
		<div class="back_top_right_content">
		<h2>Uploader des images</h2>
		<form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			<?php
		        if ( isset($errMSG_upload) ) {
		    ?>
		    <div class="alert">
		        <?php echo $errMSG_upload; ?>
		    </div><br>
		    <?php
		        }
		    ?>
	        <input type="file" name="fichier" size="30">
	        <input type="submit" name="upload" value="Uploader">
	    </form>
		<h2>Ajouter une nouvelle image</h2>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
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
				<input type="text" name="ImgSourceAdd" placeholder="Source">
				<input type="submit" name="btn-add_image" value="Valider">
			</form>
		</div>
		<div class="back_bottom_right_content">
		<h2>Modifier une image existante</h2>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
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
                if ( isset($selectPageTxt) ) {
            ?>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
				<?php
                    if ( isset($errMSG_modify_image) ) {
                ?>
                <div class="alert">
                    <?php echo $errMSG_modify_image; ?>
                </div><br>
                <?php
                    }
                ?>
				<select name="ImgSource">
					<optgroup label="Image concernée">
						<?php
						    $sql = "SELECT * FROM image WHERE imagePage = '$selectPageImg'";
							$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
							while ($data = mysql_fetch_array($req)) {
								$pathActuel = $data['texteContenu'];
								$nomImage = substr($pathActuel, 7);
						?>
						<option value="<?php echo $data['texteId']; ?>"><?php echo $nomImage; ?></option>
						<?php
								mysql_free_result ($req);
							}
							//mysql_close ();
            			?>
					</optgroup>
				</select>
				<input type="text" name="ImgSourceModify" placeholder="<?php echo $nomImage; ?>">
				<input type="submit" name="btn-modify_image" value="Valider">
			</form>
			<?php
                }
            ?>
		</div>
	</div>
</div>