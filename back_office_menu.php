<?php 
    /* --- je ne commente pas toutes mes lignes puisque certaines sont identiques, mis à part les variables passées en arguments --- */

	/* --- traitement du formulaire ajout d'aliment --- */
    if ( isset($_POST['btn-add_alim']) ) { // si le formulaire est validé

    	//récupération des variables entrées dans le formulaire
        $nomAlim = htmlspecialchars($_POST['AlimentNom']);
        $ingredients = htmlspecialchars($_POST['AlimentIngredients']);
        $prixL = htmlspecialchars($_POST['AlimentPrixL']);
        $prixXL = htmlspecialchars($_POST['AlimentPrixXL']);
        $typeAlim = htmlspecialchars($_POST['AlimentType']);
 		
 		//initialisation de la requête et envoi vers la bdd en exigant un msg d'erreur si elle est refusée
        $query = "INSERT INTO nourriture(nourriturePrixL,nourriturePrixXL,nourritureNom,nourritureIngredient,typeId) VALUES('$prixL','$prixXL','$nomAlim','$ingredients','$typeAlim')";
        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error()); 

        if ($res) { // si la requête passe
            $errTyp = "Succès"; // inutile mais sert au visuel | cette variable n'est pas ré-apellée
            $errMSG_add_alim = "Le nouvel aliment a été enregistré."; // message à afficher
            // destruction des variables
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
        $compoMenu = htmlspecialchars($_POST['MenuComposition']);
        $prixL = htmlspecialchars($_POST['MenuPrixL']);
        $prixXL = htmlspecialchars($_POST['MenuPrixXL']);
        $entre = htmlspecialchars($_POST['MenuEntree']);
        $plat = htmlspecialchars($_POST['MenuPlat']);
        $dessert = htmlspecialchars($_POST['MenuDessert']);
        $boisson = htmlspecialchars($_POST['MenuBoisson']);
 
        $query = "INSERT INTO menu(menuTitre,menuComposition,menuPrixL,menuPrixXL,menuEntree,menuPlat,menuDessert,menuBoisson) VALUES('$nomMenu','$compoMenu','$prixL','$prixXL','$entree','$plat','$dessert','$boisson')";
        $res = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error()); 

        if ($res) {
            $errTyp = "Succès";
            $errMSG_add_menu = "Le nouveau menu a été enregistré.";
            unset($nomMenu);
            unset($compoMenu);
            unset($prixL);
            unset($prixXL);
            unset($entree);
            unset($plat);
            unset($dessert);
            unset($boisson);
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
			<!-- définition du formulaire en lui indiquant de revoyer les données de traitement/erreurs sur la page après traitement de a bdd -->
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" enctype="multipart/form-data"> 
				<?php
                    if ( isset($errMSG_add_alim) ) { // si un message est défini, l'afficher dans une div créé à cet effet
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
				/* --- affichage des différents menu stockés en bdd sous forme de tableau --- */
			    $sql = 'SELECT menuId,menuTitre FROM menu';
				$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
				while ($data = mysql_fetch_array($req)) { // méthode alternative au ->fetch(), qui ne necessite pas de PDO
			?>
			<span class="diff_menus"><?php echo $data['menuId']; ?> - <?php echo $data['menuTitre']; ?></span><br>
			<?php
				}
				mysql_free_result ($req);
				//mysql_close (); // termine le traitement de toutes les requêtes en cours, et donc de celle de connexion du dbconnect (pour cette raison elle est en commentaire)

				/* --- traitement du formulaire suppression de menu --- */
			    if(isset($_POST['btn-suppr_menu'])) {
				    if(! $conn ) { // rapel de la connexion du dbconnect (pour changer de la formulation précedente ! les deux fonctionnent)
				        die('Impossible de se connecter a la base de donnée: ' . mysql_error());
				    }

				    $menuId = $_POST['MenuId']; // nouvelle variable qui récupère le chiffre rentré par l'utilisateur dans le formulaire plus bas

				    $sql = "DELETE FROM menu WHERE menuId = $menuId" ; // préparation de la requête
				    $retval = mysql_query( $sql, $conn ); // envoi en bdd avec en paramètre la requête et la vérif de connexion, ce qui remplace le or die vu dans les premières requêtes

				    if($retval) { // succès ou echec avec le message qui va avec
				    	$errTyp = "Succès";
            			$errMSG_suppr_menu = "Le menu sélectionné a été supprimé.";
				    } else {
				    	$errTyp = "danger";
            			$errMSG_suppr_menu = "Quelque chose a mal fonctionné, réessayez plus tard ...";
				    }
				    

					if ( isset($errMSG_suppr_menu) ) {
            ?>
            <div class="alert">
                <?php echo $errMSG_suppr_menu; ?>
            </div><br>
            <?php
                    }
				}
			?>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" enctype="multipart/form-data">
				<label>Numéro du menu à supprimer :<br><span>(cette action est irréverssible)</span></label>
				<input type="number" name="MenuId">
				<input type="submit" name="btn-suppr_menu" value="Valider">
			</form>
		</div>
	</div>
	<div class="back_right_content">
		<div class="back_top_right_content">
			<h2>Ajouter un nouveau menu</h2>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" enctype="multipart/form-data">
				<?php
                    if ( isset($errMSG_add_menu) ) {
                        ?>
                            <div class="alert">
                                <?php echo $errMSG_add_menu; ?>
                            </div><br>
                    <?php
                    }
                ?>
				<input type="text" name="MenuNom" placeholder="Nom de la formule">
				<input type="text" name="MenuComposition" placeholder="Composition du menu">
				<input type="number" name="MenuPrixL" placeholder="Prix L">
				<input type="number" name="MenuPrixXL" placeholder="Prix XL">

				<!-- affichage dans un select des différents aliments pouvan composer un menu, triés par catégories de la même manière que plus haut -->
				<select name="MenuEntree">
					<optgroup label="Entrée">
						<?php
							$entree = 'SELECT nourritureNom FROM nourriture WHERE typeId = 1';
							$req = mysql_query($entree) or die('Erreur SQL !<br />'.$entree.'<br />'.mysql_error()); 
							while ($entrees = mysql_fetch_array($req)) {
						?>
						<option value="<?php echo $entrees['nourritureNom']; ?>"><?php echo $entrees['nourritureNom']; ?></option>
						<?php 
							}
							mysql_free_result ($req);
							//mysql_close ();
						?>
						<option value="Aucune">Aucune</option>
					</optgroup>
				</select>
				<select name="MenuPlat">
					<optgroup label="Plat">
						<?php
							$plat = 'SELECT nourritureNom FROM nourriture WHERE typeId = 2';
							$req = mysql_query($plat) or die('Erreur SQL !<br />'.$plat.'<br />'.mysql_error()); 
							while ($plats = mysql_fetch_array($req)) {
						?>
						<option value="<?php echo $plats['nourritureNom']; ?>"><?php echo $plats['nourritureNom']; ?></option>
						<?php 
							}
							mysql_free_result ($req);
							//mysql_close (); 
						?>
						<option value="Aucun">Aucun</option>
					</optgroup>
				</select>
				<select name="MenuDessert">
					<optgroup label="Dessert">
						<?php
							$dessert = 'SELECT nourritureNom FROM nourriture WHERE typeId = 3';
							$req = mysql_query($dessert) or die('Erreur SQL !<br />'.$dessert.'<br />'.mysql_error()); 
							while ($desserts = mysql_fetch_array($req)) {
						?>
						<option value="<?php echo $desserts['nourritureNom']; ?>"><?php echo $desserts['nourritureNom']; ?></option>
						<?php 
							}
							mysql_free_result ($req);
							//mysql_close ();
						?>
						<option value="Aucun">Aucun</option>
					</optgroup>
				</select>
				<select name="MenuBoisson">
					<optgroup label="Boisson">
						<?php
							$boisson = 'SELECT nourritureNom FROM nourriture WHERE typeId = 4';
							$req = mysql_query($boisson) or die('Erreur SQL !<br />'.$boisson.'<br />'.mysql_error()); 
							while ($boissons = mysql_fetch_array($req)) {
						?>
						<option value="<?php echo $boissons['nourritureNom']; ?>"><?php echo $boissons['nourritureNom']; ?></option>
						<?php 
							}
							mysql_free_result ($req);
							//mysql_close ();
						?>
						<option value="Aucune">Aucune</option>
					</optgroup>
				</select>
				<input type="submit" name="btn-add_menu" value="Valider">
			</form>
		</div>
	</div>
</div>
