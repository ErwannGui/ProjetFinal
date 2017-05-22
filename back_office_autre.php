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
        exit("Le fichier est introuvable </br><a href=\"home.php\">retour</a>");
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
}
?>
<div class="back_content back_autre">
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
							$page = 'SELECT DISTINCT textePage FROM texte';
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
				<select name="DebutText">
					<optgroup label="Texte concerné">
						<?php
							$textePageModify = htmlspecialchars($_POST['PageTextModify']);
						    $sql = 'SELECT texteId,texteContenu,textePage FROM texte';
							$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
							while ($data = mysql_fetch_array($req)) {
								$debutTexte = substr($data['texteContenu'], 0, 15);
								$texte = $debutTexte.' ...';
								if ($data['textePage'] == $textePageModify) {
						?>
						<option value="<?php echo $data['texteId']; ?>"><?php echo $data['texteId']; ?> - <?php echo $texte; ?></option>
						<?php
								}
								mysql_free_result ($req);
							}
							//mysql_close ();

							/* --- traitement du formulaire suppression d'un évenement --- */
						    /*if(isset($_POST['btn-suppr_event'])) {
							    if(! $conn ) {
							        die('Impossible de se connecter a la base de donnée: ' . mysql_error());
							    }

							    $eventId = $_POST['EventId'];

							    $sql = "SELECT texteId,imageId FROM evenement WHERE eventId = $eventId";
							    $res = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
							    $texteId_imageId = mysql_fetch_array($res);
							    $texteId = $texteId_imageId['texteId'];
								$imageId = $texteId_imageId['imageId'];

								$sql = "DELETE FROM texte WHERE texteId = $texteId" ;
							    $retval = mysql_query( $sql, $conn );

							    $sql = "DELETE FROM image WHERE imageId = $imageId" ;
							    $retval = mysql_query( $sql, $conn );

							    $sql = "DELETE FROM evenement WHERE eventId = $eventId" ;
							    $retval = mysql_query( $sql, $conn );

							    if($retval) {
							    	$errTyp = "Succès";
			            			$errMSG_suppr_event = "L'évenement à bien été supprimé.";
							    } else {
							    	$errTyp = "danger";
			            			$errMSG_suppr_event = "Quelque chose a mal fonctionné, réessayez plus tard ...";
							    }  
							}*/  
            			?>
					</optgroup>
				</select>
				<textarea name="AutreTextContenuModify">Contenu du texte existant (à modifier)</textarea>
				<input type="submit" name="btn-modify_text" value="Valider">
			</form>
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
				<select name="ImgNom">
					<optgroup label="Image concernée">
						<option value="Id1">1 - "Nom de la première image"</option>
						<option value="Id2">2 - "Nom de la deuxième image"</option>
						<option value="Id3">3 - "Nom de la troisième image"</option>
					</optgroup>
				</select>
				<input type="text" name="ImgSourceModify" placeholder="Source de l'image existante">
				<input type="submit" name="btn-modify_image" value="Valider">
			</form>
		</div>
	</div>
</div>
<!--UPDATE 'texte' SET 'texteContenu' = '$contenu' WHERE 'texte'.'texteId' = $texteId;-->
<!--UPDATE 'image' SET 'imageSource' = '$imgPath' WHERE 'image'.'imageId' = $imageId;-->