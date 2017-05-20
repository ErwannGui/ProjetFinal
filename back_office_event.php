<div class="back_content back_evenement">
	<div class="back_left_content">
		<div class="back_top_left_content">
			<h2>Ajouter un nouvel évenement</h2>
			<form method="post" action="trait_form_event.php" enctype="multipart/form-data">
				<input type="text" name="EventTitre" placeholder="Titre de l'évenement">
				<input type="date" name="EventDate" placeholder="Date de l'évenement">
				<input type="text" name="EventImgSource" placeholder="Source de l'image">
				<input type="date" name="EventType" placeholder="Type d'évenement">
				<textarea name="EventDescription" placeholder="Description de l'évenement"></textarea>
				<input type="submit" name="Valider" value="Valider">
			</form>
		</div>
	</div>
	<div class="back_right_content">
		<div class="back_top_right_content">
			<h2>Supprimer un évenement existant</h2>
			<form method="post" action="trait_form_event.php" enctype="multipart/form-data">
				<span class="diff_events"></span>
				<span class="diff_events"></span>
				<span class="diff_events"></span>
				<label>Numéro de l'évenement à supprimer :<br><span>(cette acion est irréverssible)</span></label>
				<input type="number" name="EventId">
				<input type="submit" name="btn-suppr_event" value="Valider">
			</form>
		</div>
	</div>
</div>