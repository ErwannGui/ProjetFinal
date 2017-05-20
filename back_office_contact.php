<div class="back_content back_contact">
	<!--<iframe id="boite_mail" src="https://www.google.com/intl/fr/gmail/about/"></iframe>-->
	<?php
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=food_truck;charset=utf8', 'root', '');
		}
		catch(Exception $e)
		{
		        die('Erreur : '.$e->getMessage());
		}
		$messagereponse = $bdd->query('SELECT * FROM message');
		while ($messagedonnees = $messagereponse->fetch())
		{
	?>
	<div class="contactMessage ">
		<div class="messageHeader">
			<div class="messageHeaderLeft">
				<p><?php echo $messagedonnees['messageNomEnvoyeur']; ?></p>
			</div>
			<div class="messageHeaderRight">
				<p><?php echo $messagedonnees['messageObjet']; ?></p>
				<!--<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="caret_down" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 292.362 292.362" style="enable-background:new 0 0 292.362 292.362;" xml:space="preserve">
					<g><path d="M286.935,69.377c-3.614-3.617-7.898-5.424-12.848-5.424H18.274c-4.952,0-9.233,1.807-12.85,5.424   C1.807,72.998,0,77.279,0,82.228c0,4.948,1.807,9.229,5.424,12.847l127.907,127.907c3.621,3.617,7.902,5.428,12.85,5.428   s9.233-1.811,12.847-5.428L286.935,95.074c3.613-3.617,5.427-7.898,5.427-12.847C292.362,77.279,290.548,72.998,286.935,69.377z" fill="#FFFFFF"/></g>
				</svg>-->
			</div>
		</div>
		<div class="messageBody">
			<div class="messageBodyInfos">
				<p><a href="mailto:chezfifi.resto@gmail.com"><?php echo $messagedonnees['messageMail']; ?></a> | <a href="tel:<?php echo $messagedonnees['messageTel']; ?>"><?php echo $messagedonnees['messageTel']; ?></a></p>
			</div>
			<div class="messageBodyContent">
				<p><?php echo $messagedonnees['messageContenu']; ?></p>
			</div>
		</div>
	</div>
	<?php
		}
		$messagereponse->closeCursor();
	?>
</div>