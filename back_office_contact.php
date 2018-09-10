<div class="back_content back_contact">
	<?php
		// récupération des données de messages envoyées via le formulaire dans la page contact et mise en forme du message pour chaque ligne du tableau
		$query = 'SELECT * FROM message';
		$messagereponse = mysql_query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysql_error()); 
		while ($messagedonnees = mysql_fetch_array($messagereponse))
		{
	?>
	<div class="contactMessage ">
		<div class="messageHeader">
			<div class="messageHeaderLeft">
				<p><?php echo $messagedonnees['messageNomEnvoyeur']; ?></p>
			</div>
			<div class="messageHeaderRight">
				<p><?php echo $messagedonnees['messageObjet']; ?></p>
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
		mysql_free_result ($messagereponse);
	?>
</div>