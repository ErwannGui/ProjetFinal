<?php 
	/* --- traitement du formulaire ajout d'un évenement --- */
    if ( isset($_POST['btn-add_event']) ) {

    	$dossier = 'images/events/'; // dossier où sera déplacé le fichier

		$image = basename($_FILES['EventImage']['name']);

		$extensions = array('.png', '.gif', '.jpg', '.jpeg');
		$extension = strrchr($_FILES['EventImage']['name'], '.');
		if(!in_array($extension, $extensions))
		{
		     $errMSG_add_event = 'Vous devez uploader un fichier de type png, gif, jpg, ou jpeg.';
		} else {
			if(move_uploaded_file($_FILES['EventImage']['tmp_name'], $dossier.$image)) {
				$errMSG_upload = "Le fichier a bien été sauvegardé.";
			} else {
				$errMSG_upload = "Impossible de copier le fichier dans ".$dossier;
		        exit();
			}
	    	$imgPathEvent = $dossier.$image;

	        $titreEvent = htmlspecialchars($_POST['EventTitre']);
	        $dateEvent = htmlspecialchars($_POST['EventDate']);
 	        $typeEvent = htmlspecialchars($_POST['EventType']);
	        $descriptionEvent = htmlspecialchars($_POST['EventDescription']);

	        $query = "INSERT INTO texte(texteContenu,textePage) VALUES('$descriptionEvent','Prestations privee')";
	        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error()); 

	        $query = "INSERT INTO image(imageSource,imagePage) VALUES('$imgPathEvent','Prestations privee')";
	        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error()); 

	        $query = "SELECT texteId FROM texte WHERE texteId = (SELECT MAX(texteId) FROM texte)";
	        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error());
	        $texte = mysql_fetch_array($res);
			$texteId = $texte['texteId'];

	        $query = "SELECT imageId FROM image WHERE imageId = (SELECT MAX(imageId) FROM image)";
	        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error()); 
	        $image = mysql_fetch_array($res);
			$imageId = $image['imageId'];
	 
	        $query = "INSERT INTO evenement(eventTitre,eventDate,eventType,texteId,imageId) VALUES('$titreEvent','$dateEvent','$typeEvent','$texteId','$imageId')";
	        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error()); 

	        if ($res) {
	            $errTyp = "Succès";
	            $errMSG_add_event = $errMSG_upload." Le nouvel évenement a été enregistré.";
	            unset($titreEvent);
	            unset($dateEvent);
	            unset($imgPathEvent);
	            unset($typeEvent);
	            unset($descriptionEvent);
	        } else {
	            $errTyp = "danger";
	            $errMSG_add_event = $errMSG_upload." Quelque chose a mal fonctionné, réessayez plus tard ...";
	        }
    	}
    }
?>
<div class="back_content back_evenement">
	<div class="back_left_content">
		<div class="back_top_left_content">
			<h2>Ajouter un nouvel évenement</h2>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" enctype="multipart/form-data">
				<?php
                    if ( isset($errMSG_add_event) ) {
                ?>
                <div class="alert">
                    <?php echo $errMSG_add_event; ?>
                </div><br>
                <?php
                    }
                ?>
				<input type="text" name="EventTitre" placeholder="Titre de l'évenement">
				<input type="date" name="EventDate" placeholder="Date de l'évenement (format YYYY-MM-DD)">
				<input type="file" name="EventImage">
				<input type="date" name="EventType" placeholder="Type d'évenement">
				<textarea name="EventDescription" placeholder="Description de l'évenement"></textarea>
				<input type="submit" name="btn-add_event" value="Valider">
			</form>
		</div>
	</div>
	<div class="back_right_content">
		<div class="back_top_right_content">
			<h2>Supprimer un évenement existant</h2>
			<?php
			    $sql = 'SELECT eventId,eventTitre FROM evenement';
				$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
				while ($data = mysql_fetch_array($req)) {
			?>
			<span class="diff_partenaires"><?php echo $data['eventId']; ?> - <?php echo $data['eventTitre']; ?></span><br>
			<?php
				}
				mysql_free_result ($req);
				//mysql_close ();

				/* --- traitement du formulaire suppression d'un évenement --- */
			    if(isset($_POST['btn-suppr_event'])) {
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
				    
					if ( isset($errMSG_suppr_event) ) {
            ?>
            <div class="alert">
                <?php echo $errMSG_suppr_event; ?>
            </div><br>
            <?php
                    }
				}
			?>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" enctype="multipart/form-data">
				<label>Numéro de l'évenement à supprimer :<br><span>(cette acion est irréverssible)</span></label>
				<input type="number" name="EventId">
				<input type="submit" name="btn-suppr_event" value="Valider">
			</form>
		</div>
	</div>
</div>