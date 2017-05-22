<?php 
	/* --- traitement du formulaire ajout de partenaire --- */
    if ( isset($_POST['btn-add_partenaire']) ) {

        $nomPartenaire = htmlspecialchars($_POST['PartenaireNom']);
        $imgPathPartenaire = htmlspecialchars($_POST['PartenaireLogoSource']);
        $adressPartenaire = htmlspecialchars($_POST['PartenaireAdresse']);
        $descriptionPartenaire = htmlspecialchars($_POST['PartenaireDescription']);

        $query = "INSERT INTO texte(texteContenu,textePage) VALUES('$descriptionPartenaire','A propos de nous')";
        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error()); 

        $query = "INSERT INTO image(imageSource,imagePage) VALUES('$imgPathPartenaire','A propos de nous')";
        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error()); 

        $query = "SELECT texteId FROM texte WHERE texteId = (SELECT MAX(texteId) FROM texte)";
        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error());
        $texte = mysql_fetch_array($res);
		$texteId = $texte['texteId'];

        $query = "SELECT imageId FROM image WHERE imageId = (SELECT MAX(imageId) FROM image)";
        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error()); 
        $image = mysql_fetch_array($res);
		$imageId = $image['imageId'];
 
        $query = "INSERT INTO partenaire(partenaireNom,partenaireLieu,texteId,imageId) VALUES('$nomPartenaire','$adressPartenaire','$texteId','$imageId')";
        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error()); 

        if ($res) {
            $errTyp = "Succès";
            $errMSG_add_partenaire = "Le nouveau partenaire a été enregistré.";
            unset($nomPartenaire);
            unset($imgPathPartenaire);
            unset($adressPartenaire);
            unset($descriptionPartenaire);
        } else {
            $errTyp = "danger";
            $errMSG_add_partenaire = "Quelque chose a mal fonctionné, réessayez plus tard ...";
        }
    }
?>
<div class="back_content back_partenaire ">
	<div class="back_left_content">
		<div class="back_top_left_content">
		<h2>Ajouter un nouveau partenaire</h2>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
				<?php
                    if ( isset($errMSG_add_partenaire) ) {
                ?>
                <div class="alert">
                    <?php echo $errMSG_add_partenaire; ?>
                </div><br>
                <?php
                    }
                ?>
				<input type="text" name="PartenaireNom" placeholder="Nom du partenaire">
				<input type="text" name="PartenaireLogoSource" placeholder="Source du Logo partenaire (si existant)">
				<input type="text" name="PartenaireAdresse" placeholder="Adresse du partenaire">
				<textarea name="PartenaireDescription" placeholder="Description de votre partenaire"></textarea>
				<input type="submit" name="btn-add_partenaire" value="Valider">
			</form>
		</div>
	</div>
	<div class="back_right_content">
		<div class="back_top_right_content">
			<h2>Supprimer un partenaire existant</h2>
			<?php
			    $sql = 'SELECT partenaireId,partenaireNom FROM partenaire';
				$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
				while ($data = mysql_fetch_array($req)) {
			?>
			<span class="diff_partenaires"><?php echo $data['partenaireId']; ?> - <?php echo $data['partenaireNom']; ?></span><br>
			<?php
				}
				mysql_free_result ($req);
				//mysql_close ();

				/* --- traitement du formulaire suppression de partenaire --- */
			    if(isset($_POST['btn-suppr_partenaire'])) {
				    if(! $conn ) {
				        die('Impossible de se connecter a la base de donnée: ' . mysql_error());
				    }

				    $partenaireId = $_POST['PartenaireId'];

				    $sql = "SELECT texteId,imageId FROM partenaire WHERE partenaireId = $partenaireId";
				    $res = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
				    $texteId_imageId = mysql_fetch_array($res);
				    $texteId = $texteId_imageId['texteId'];
					$imageId = $texteId_imageId['imageId'];

					$sql = "DELETE FROM texte WHERE texteId = $texteId" ;
				    $retval = mysql_query( $sql, $conn );

				    $sql = "DELETE FROM image WHERE imageId = $imageId" ;
				    $retval = mysql_query( $sql, $conn );

				    $sql = "DELETE FROM partenaire WHERE partenaireId = $partenaireId" ;
				    $retval = mysql_query( $sql, $conn );

				    if($retval) {
				    	$errTyp = "Succès";
            			$errMSG_suppr_partenaire = "Le partenaire sélectionné a été supprimé.";
				    } else {
				    	$errTyp = "danger";
            			$errMSG_suppr_partenaire = "Quelque chose a mal fonctionné, réessayez plus tard ...";
				    }
				    
					if ( isset($errMSG_suppr_partenaire) ) {
            ?>
            <div class="alert">
                <?php echo $errMSG_suppr_partenaire; ?>
            </div><br>
            <?php
                    }
				}
			?>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
				<label>Numéro du partenaire à supprimer :<br><span>(cette acion est irréverssible)</span></label>
				<input type="number" name="PartenaireId">
				<input type="submit" name="btn-suppr_partenaire" value="Valider">
			</form>
		</div>
	</div>
</div>