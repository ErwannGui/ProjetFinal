<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	// it will never let you open index(login) page if session is set
	if ( isset($_SESSION['user'])!="" ) {
		header("Location: back_office.php");
		exit;
	}
	
	$error = false;
	
	if( isset($_POST['btn-login']) ) {	
		
		// prevent sql injections/ clear user invalid inputs
		$pseudo = trim($_POST['pseudo']);
		$pseudo = strip_tags($pseudo);
		$pseudo = htmlspecialchars($pseudo);
		
		$pass = trim($_POST['pass']);
		$pass = strip_tags($pass);
		$pass = htmlspecialchars($pass);
		// prevent sql injections / clear user invalid inputs
		
		if(empty($pseudo)){
			$error = true;
			$pseudoError = "Entrez votre pseudonyme s'il vous plait";
		}
		
		if(empty($pass)){
			$error = true;
			$passError = "S'il vous plait entrez votre mot de passe.";
		}
		
		// if there's no error, continue to login
		if (!$error) {
		
			$res=mysql_query("SELECT * FROM proprietaire WHERE adminPseudo='$pseudo'");
			$row=mysql_fetch_array($res);
			$count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
			
			if( $count == 1 && $row['adminMdp']==$pass ) {
				$_SESSION['user'] = $row['adminId'];
				header("Location: back_office.php");
			} else {
				$errMSG = "Données incorrectes, réessayez ...";
			}
				
		}
		
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/admin.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <title>Connection</title>
</head>
<body>
    <div class="connection">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">

            <div class="connection-title">
                <h2>Se connecter</h2>
            </div>
            <?php
            if ( isset($errMSG) ) {
                ?>
                <div class="connection-group">
                    <?php echo $errMSG; ?>
                </div>
                <?php
            }
            ?>
            <hr>
            <div class="contenue">
                <div class="connection-saisi">
                    <div class="svg">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 14 14" style="enable-background:new 0 0 14 14;" xml:space="preserve" width="512px" height="512px">
							<path d="M7,9L5.268,7.484l-4.952,4.245C0.496,11.896,0.739,12,1.007,12h11.986    c0.267,0,0.509-0.104,0.688-0.271L8.732,7.484L7,9z" fill="#555555"/>
	                        <path d="M13.684,2.271C13.504,2.103,13.262,2,12.993,2H1.007C0.74,2,0.498,2.104,0.318,2.273L7,8    L13.684,2.271z" fill="#555555"/>
	                        <polygon points="0,2.878 0,11.186 4.833,7.079   " fill="#555555"/>
	                        <polygon points="9.167,7.079 14,11.186 14,2.875   " fill="#555555"/>
						</svg>
                    </div>
                    <div class="connection-input">
                        <input type="text" name="pseudo" class="form-control" placeholder="Pseudonyme" value="<?php echo $pseudo; ?>" maxlength="40" /
                        <span class="text-danger"><?php echo $pseudoError; ?></span>
                    </div>

                </div>
                <div class="connection-saisi">
                    <div class="svg">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 401.998 401.998" style="enable-background:new 0 0 401.998 401.998;" xml:space="preserve">
							<path d="M357.45,190.721c-5.331-5.33-11.8-7.993-19.417-7.993h-9.131v-54.821c0-35.022-12.559-65.093-37.685-90.218   C266.093,12.563,236.025,0,200.998,0c-35.026,0-65.1,12.563-90.222,37.688C85.65,62.814,73.091,92.884,73.091,127.907v54.821   h-9.135c-7.611,0-14.084,2.663-19.414,7.993c-5.33,5.326-7.994,11.799-7.994,19.417V374.59c0,7.611,2.665,14.086,7.994,19.417   c5.33,5.325,11.803,7.991,19.414,7.991H338.04c7.617,0,14.085-2.663,19.417-7.991c5.325-5.331,7.994-11.806,7.994-19.417V210.135   C365.455,202.523,362.782,196.051,357.45,190.721z M274.087,182.728H127.909v-54.821c0-20.175,7.139-37.402,21.414-51.675   c14.277-14.275,31.501-21.411,51.678-21.411c20.179,0,37.399,7.135,51.677,21.411c14.271,14.272,21.409,31.5,21.409,51.675V182.728   z" fill="#555555"/>
						</svg>
                    </div>
                    <div class="connection-input">
                        <input type="password" name="pass" class="form-control" placeholder="Mot de passe" maxlength="15" />
                        <span class="text-danger"><?php echo $passError; ?></span>
                    </div>

                </div>
            </div>
            <hr>
            <div class="connection-btn">
                <button type="submit" class="btn" name="btn-login">Se connecter</button>
            </div>
            <hr>
            <div class="connection-incription">
                <a href="index.php">Page d'accueil</a>
            </div>
        </form>
    </div>
</body>
</html>
<?php ob_end_flush(); ?>