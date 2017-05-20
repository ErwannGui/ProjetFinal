<?php 
	/* --- traitement du formulaire ajout d'aliment --- */
    if ( isset($_POST['btn-add_alim']) ) {

        $nomAlim = htmlspecialchars($_POST['AlimentNom']);
        $ingredients = htmlspecialchars($_POST['AlimentIngredients']);
        $prixL = htmlspecialchars($_POST['AlimentPrixL']);
        $prixXL = htmlspecialchars($_POST['AlimentPrixXL']);
        $typeAlim = htmlspecialchars($_POST['AlimentType']);
 
        $query = "INSERT INTO nourriture(nourriturePrixL,nourriturePrixXL,nourritureNom,nourritureIngredient,typeId) VALUES('$prixL','$prixXL','$nomAlim','$ingredients','$typeAlim')";
        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error()); 

        if ($res) {
            $errTyp = "Succès";
            $errMSG_add_alim = "Le nouvel aliment a été enregistré.";
            unset($nomAlim);
            unset($ingredients);
            unset($prixL);
            unset($prixXL);
            unset($typeAlim);
        } else {
            $errTyp = "danger";
            $errMSG_add_alim = "Quelque chose a mal fonctionné, réessayez plus tard ...";
        }
    }

    /* --- traitement du formulaire ajout de menu --- */
    if ( isset($_POST['btn-add_menu']) ) {

        $nomMenu = htmlspecialchars($_POST['MenuNom']);
        $prixL = htmlspecialchars($_POST['MenuPrixL']);
        $prixXL = htmlspecialchars($_POST['MenuPrixXL']);
        $entre = htmlspecialchars($_POST['MenuEntree']);
        $plat = htmlspecialchars($_POST['MenuPlat']);
        $dessert = htmlspecialchars($_POST['MenuDessert']);
        $boisson = htmlspecialchars($_POST['MenuBoisson']);
 
        $query = "INSERT INTO menu(menuNom,menuPrixL,menuPrixXL) VALUES('$nomMenu','$prixL','$prixXL')";
        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error()); 

        if ($res) {
            $errTyp = "Succès";
            $errMSG_add_menu = "Le nouveau menu a été enregistré.";
            unset($nomAlim);
            unset($ingredients);
            unset($prixL);
            unset($prixXL);
            unset($typeAlim);
        } else {
            $errTyp = "danger";
            $errMSG_add_menu = "Quelque chose a mal fonctionné, réessayez plus tard ...";
        }
    }
?>
<div class="back_content back_menu active">
	<div class="back_left_content">
		<div class="back_top_left_content">
			<h2>Ajouter un nouvel aliment</h2>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
				<?php
                    if ( isset($errMSG) ) {
                        ?>
                            <div class="alert">
                                <?php echo $errMSG_add_alim; ?>
                            </div><br>
                    <?php
                    }
                ?>
				<input type="text" name="AlimentNom" placeholder="Nom du plat">
				<input type="text" name="AlimentIngredients" placeholder="Ingrédients (séparés par une virgule)">
				<input type="number" name="AlimentPrixL" placeholder="Prix L">
				<input type="number" name="AlimentPrixXL" placeholder="Prix XL">
				<select name="AlimentType">
					<optgroup label="Type d'aliment">
						<option value="1">Entrée</option>
						<option value="2">Plat</option>
						<option value="3">Dessert</option>
						<option value="4">Boisson</option>
					</optgroup>
				</select>
				<input type="submit" name="btn-add_alim" value="Valider">
			</form>
		</div>
		<div class="back_bottom_left_content">
			<h2>Supprimer un menu existant</h2>
			<?php
			    $sql = 'SELECT menuId,menuNom FROM menu';
				$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
				while ($data = mysql_fetch_array($req)) {
			?>
			<span class="diff_menus"><?php echo $data['menuId']; ?> - <?php echo $data['menuNom']; ?></span><br>
			<?php
				}
				mysql_free_result ($req);
				mysql_close ();

				/* --- traitement du formulaire suppression de menu --- */
			    if(isset($_POST['btn-suppr_menu'])) {
				    if(! $conn ) {
				        die('Impossible de se connecter a la base de donnée: ' . mysql_error());
				    }

				    $menuId = $_POST['MenuId'];

				    $sql = "DELETE FROM menu WHERE menuId = $menuId" ;
				    $retval = mysql_query( $sql, $conn );

				    if($retval) {
				    	$errTyp = "Succès";
            			$errMSG_suppr_menu = "Le menu sélectionné a été supprimé.";
				    } else {
				    	$errTyp = "danger";
            			$errMSG_suppr_menu = "Quelque chose a mal fonctionné, réessayez plus tard ...";
				    }
				    

					if ( isset($errMSG) ) {
            ?>
            <div class="alert">
                <?php echo $errMSG_suppr_menu; ?>
            </div><br>
            <?php
            		mysql_close($conn);
                    }
				}
			?>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
				<label>Numéro du menu à supprimer :<br><span>(cette acion est irréverssible)</span></label>
				<input type="number" name="MenuId">
				<input type="submit" name="btn-suppr_menu" value="Valider">
			</form>
		</div>
	</div>
	<div class="back_right_content">
		<div class="back_top_right_content">
			<h2>Ajouter un nouveau menu</h2>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
				<?php
                    if ( isset($errMSG) ) {
                        ?>
                            <div class="alert">
                                <?php echo $errMSG_add_menu; ?>
                            </div><br>
                    <?php
                    }
                ?>
				<input type="text" name="MenuNom" placeholder="Nom de la formule">
				<input type="number" name="MenuPrixL" placeholder="Prix L">
				<input type="number" name="MenuPrixXL" placeholder="Prix XL">
				<select name="MenuEntree">
					<optgroup label="Entrée">
						<?php
							/*$entree = 'SELECT nourritureNom FROM nourriture WHERE typeId = 1';
							$req = mysql_query($entree) or die('Erreur SQL !<br />'.$entree.'<br />'.mysql_error()); 
							while ($entrees = mysql_fetch_array($req)) {*/
						?>
						<option value="<?php echo $entrees['nourritureNom']; ?>"><?php echo $entrees['nourritureNom']; ?></option>
						<?php 
							/*}
							mysql_free_result ($req);
							mysql_close ();*/
						?>
					</optgroup>
				</select>
				<select name="MenuPlat">
					<optgroup label="Plat">
						<?php
							/*$plat = 'SELECT nourritureNom FROM nourriture WHERE typeId = 2';
							$req = mysql_query($plat) or die('Erreur SQL !<br />'.$plat.'<br />'.mysql_error()); 
							while ($plats = mysql_fetch_array($req)) {*/
						?>
						<option value="<?php echo $plats['nourritureNom']; ?>"><?php echo $plats['nourritureNom']; ?></option>
						<?php 
							/*}
							mysql_free_result ($req);
							mysql_close (); */
						?>
					</optgroup>
				</select>
				<select name="MenuDessert">
					<optgroup label="Dessert">
						<?php
							/*$dessert = 'SELECT nourritureNom FROM nourriture WHERE typeId = 3';
							$req = mysql_query($dessert) or die('Erreur SQL !<br />'.$dessert.'<br />'.mysql_error()); 
							while ($desserts = mysql_fetch_array($req)) {*/
						?>
						<option value="<?php echo $desserts['nourritureNom']; ?>"><?php echo $desserts['nourritureNom']; ?></option>
						<?php 
							/*}
							mysql_free_result ($req);
							mysql_close (); */
						?>
					</optgroup>
				</select>
				<select name="MenuBoisson">
					<optgroup label="Boisson">
						<?php
							/*$boisson = 'SELECT nourritureNom FROM nourriture WHERE typeId = 1';
							$req = mysql_query($boisson) or die('Erreur SQL !<br />'.$boisson.'<br />'.mysql_error()); 
							while ($boissons = mysql_fetch_array($req)) {*/
						?>
						<option value="<?php echo $boissons['nourritureNom']; ?>"><?php echo $boissons['nourritureNom']; ?></option>
						<?php 
							/*}
							mysql_free_result ($req);
							mysql_close (); */
						?>
					</optgroup>
				</select>
				<input type="submit" name="btn-add_menu" value="Valider">
			</form>
		</div>
	</div>
</div>
