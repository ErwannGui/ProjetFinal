<?php 
	/* --- traitement du formulaire ajout d'un collègue --- */
    if ( isset($_POST['btn-add_equipe']) ) {

        $nomMembre = htmlspecialchars($_POST['CollegueNom']);
        $prenomMembre = htmlspecialchars($_POST['ColleguePrenom']);
        $imgPathMembre = htmlspecialchars($_POST['CollegueImgSource']);
        $descriptionMembre = htmlspecialchars($_POST['CollegueDescription']);

        $query = "INSERT INTO texte(texteContenu,textePage) VALUES('$descriptionMembre','A propos de nous')";
        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error()); 

        $query = "INSERT INTO image(imageSource,imagePage) VALUES('$imgPathMembre','A propos de nous')";
        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error()); 

        $query = "SELECT texteId FROM texte WHERE texteId = (SELECT MAX(texteId) FROM texte)";
        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error());
        $texte = mysql_fetch_array($res);
		$texteId = $texte['texteId'];

        $query = "SELECT imageId FROM image WHERE imageId = (SELECT MAX(imageId) FROM image)";
        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error()); 
        $image = mysql_fetch_array($res);
		$imageId = $image['imageId'];
 
        $query = "INSERT INTO equipe(membreNom,membrePrenom,texteId,imageId) VALUES('$nomMembre','$prenomMembre','$texteId','$imageId')";
        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error()); 

        if ($res) {
            $errTyp = "Succès";
            $errMSG_add_equipe = "Vous avez ajouté un nouvau membre à votre équipe.";
            unset($nomMembre);
            unset($prenomMembre);
            unset($imgPathMembre);
            unset($descriptionMembre);
        } else {
            $errTyp = "danger";
            $errMSG_add_equipe = "Quelque chose a mal fonctionné, réessayez plus tard ...";
        }
    }
?>
<div class="back_content back_equipe">
	<div class="back_left_content">
		<div class="back_top_left_content">
		<h2>Ajouter un collègue</h2>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
				<?php
                    if ( isset($errMSG_add_equipe) ) {
                ?>
                <div class="alert">
                    <?php echo $errMSG_add_equipe; ?>
                </div><br>
                <?php
                    }
                ?>
				<input type="text" name="CollegueNom" placeholder="Nom du collègue">
				<input type="text" name="ColleguePrenom" placeholder="Prénom du collègue">
				<input type="text" name="CollegueImgSource" placeholder="Source de l'image de profil">
				<textarea name="CollegueDescription" placeholder="Description de votre collègue"></textarea>
				<input type="submit" name="btn-add_equipe" value="Valider">
			</form>
		</div>
	</div>
	<div class="back_right_content">
		<div class="back_top_right_content">
			<h2>Supprimer un collègue existant</h2>
			<?php
			    $sql = 'SELECT membreId,membreNom,membrePrenom FROM equipe';
				$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
				while ($data = mysql_fetch_array($req)) {
					$membre = $data['membrePrenom'].' '.$data['membreNom']
			?>
			<span class="diff_membres"><?php echo $data['membreId']; ?> - <?php echo $membre; ?></span><br>
			<?php
				}
				mysql_free_result ($req);
				//mysql_close ();

				/* --- traitement du formulaire suppression d'un collègue --- */
			    if(isset($_POST['btn-suppr_equipe'])) {
				    if(! $conn ) {
				        die('Impossible de se connecter a la base de donnée: ' . mysql_error());
				    }

				    $membreId = $_POST['CollegueId'];

				    $sql = "SELECT texteId,imageId FROM equipe WHERE membreId = $membreId";
				    $res = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
				    $texteId_imageId = mysql_fetch_array($res);
				    $texteId = $texteId_imageId['texteId'];
					$imageId = $texteId_imageId['imageId'];

					$sql = "DELETE FROM texte WHERE texteId = $texteId" ;
				    $retval = mysql_query( $sql, $conn );

				    $sql = "DELETE FROM image WHERE imageId = $imageId" ;
				    $retval = mysql_query( $sql, $conn );

				    $sql = "DELETE FROM equipe WHERE membreId = $membreId" ;
				    $retval = mysql_query( $sql, $conn );

				    if($retval) {
				    	$errTyp = "Succès";
            			$errMSG_suppr_equipe = "Le membre à bien été supprimé de votre équipe.";
				    } else {
				    	$errTyp = "danger";
            			$errMSG_suppr_equipe = "Quelque chose a mal fonctionné, réessayez plus tard ...";
				    }
				    
					if ( isset($errMSG_suppr_equipe) ) {
            ?>
            <div class="alert">
                <?php echo $errMSG_suppr_equipe; ?>
            </div><br>
            <?php
                    }
				}
			?>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
				<label>Numéro du collègue à supprimer :<br><span>(cette acion est irréverssible)</span></label>
				<input type="number" name="CollegueId">
				<input type="submit" name="btn-suppr_equipe" value="Valider">
			</form>
		</div>
	</div>
</div>