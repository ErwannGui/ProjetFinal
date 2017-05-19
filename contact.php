<!DOCTYPE HTML>
<html>
	<head>
		<title>Contact</title>
        <meta charset="utf-8"/>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	</head>
	<body>

        <?php $page = 5;
        include "headerFront.php"; ?>

        <div id="container">

            <div id="contactBackground">

                <div id="contactBackgroundImage"></div>
                <div class="backgroundTitle">
                    <h1>CONTACT</h1>
                </div>
                <div class="backgroundArrow" id="scroll_ancre">
                    <a class="js-scroll" href="#scroll_ancre"><svg enable-background="new 0 0 26 26" id="Layer_1" version="1.1" viewBox="0 0 26 26" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><polygon points="0.046,2.582 2.13,0.498 12.967,11.334 23.803,0.498 25.887,2.582 12.967,15.502  "/><polygon points="0.046,13.582 2.13,11.498 12.967,22.334 23.803,11.498 25.887,13.582 12.967,26.502"/></g></svg></a>
                </div>
            </div>

            <section class="adress" id="scroll_ancre">
            	<div class="adress_table">
            		<div class="day mardi">
            			<h3>Mardi</h3>
            			<h4>Adresse complète </h4>
            			<p>Midi :</p>
            			<p>11h30 - 14h30</p>
            			<p>Soir :</p>
            			<p>19h30 - 22h30</p>
            		</div>
            		<div class="day mercredi">
            			<h3>Mercredi</h3>
            			<h4>Adresse complète </h4>
            			<p>Midi :</p>
            			<p>11h30 - 14h30</p>
            			<p>Soir :</p>
            			<p>19h30 - 22h30</p>
            		</div>
            		<div class="day jeudi">
            			<h3>Jeudi</h3>
            			<h4>Adresse complète </h4>
            			<p>Midi :</p>
            			<p>11h30 - 14h30</p>
            			<p>Soir :</p>
            			<p>19h30 - 22h30</p>
            		</div>
            		<div class="day vendredi">
            			<h3>Vendredi</h3>
            			<h4>Adresse complète </h4>
            			<p>Midi :</p>
            			<p>11h30 - 14h30</p>
            			<p>Soir :</p>
            			<p>19h30 - 22h30</p>
            		</div>
            		<div class="day week-end">
            			<h3>Samedi - Dimanche</h3>
            			<h4>Adresse complète </h4>
            			<p>Réservé au évenements privés</p>
            		</div>
            	</div>
            </section>

            <section class="map">
            	<div id="map"></div>
            </section>

            <section class="formContact">
            	<p>Contactez nous par mail sur <a href="mailto:chezfifi.resto@gmail.com">chezfifi.resto@gmail.com</a> ou par télephone au <a href="tel:0600000000">06 00 00 00 00</a>.</p>
            	<p>Vous pouvez aussi nous contacter directement via ce formulaire.</p>
            	<form method="post" action="">
            		<div class="leftForm">
            			<input type="text" name="Nom" placeholder="Nom">
            			<input type="text" name="Prenom" placeholder="Prénom">
            			<input type="email" name="Mail" placeholder="Adresse mail">
            			<input type="tel" name="Tel" placeholder="Numéro de téléphone">
            			<select name="objet">
							<optgroup label="Objet du message">
								<option value="Event">Prestation privée</option>
								<option value="Autre">Autre</option>
							</optgroup>
						</select>
            		</div>
            		<div class="rightForm">
            			<textarea placeholder="Message"></textarea>
            			<input type="submit" name="Envoyer" value="Envoyer">
            		</div>
            	</form>
            </section>
        </div>  
        <script>
          function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: 47.2056823, lng: -1.5400553},
              zoom: 12,
              scrollwheel: false,
              styles: [
                {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
                {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
                {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
                {
                  featureType: 'administrative.locality',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#d59563'}]
                },
                {
                  featureType: 'poi',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#d59563'}]
                },
                {
                  featureType: 'poi.park',
                  elementType: 'geometry',
                  stylers: [{color: '#263c3f'}]
                },
                {
                  featureType: 'poi.park',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#6b9a76'}]
                },
                {
                  featureType: 'road',
                  elementType: 'geometry',
                  stylers: [{color: '#38414e'}]
                },
                {
                  featureType: 'road',
                  elementType: 'geometry.stroke',
                  stylers: [{color: '#212a37'}]
                },
                {
                  featureType: 'road',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#9ca5b3'}]
                },
                {
                  featureType: 'road.highway',
                  elementType: 'geometry',
                  stylers: [{color: '#746855'}]
                },
                {
                  featureType: 'road.highway',
                  elementType: 'geometry.stroke',
                  stylers: [{color: '#1f2835'}]
                },
                {
                  featureType: 'road.highway',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#f3d19c'}]
                },
                {
                  featureType: 'transit',
                  elementType: 'geometry',
                  stylers: [{color: '#2f3948'}]
                },
                {
                  featureType: 'transit.station',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#d59563'}]
                },
                {
                  featureType: 'water',
                  elementType: 'geometry',
                  stylers: [{color: '#17263c'}]
                },
                {
                  featureType: 'water',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#515c6d'}]
                },
                {
                  featureType: 'water',
                  elementType: 'labels.text.stroke',
                  stylers: [{color: '#17263c'}]
                }
              ]
            });
            var mardi = new google.maps.Marker({
	          position: {lat: 47.190157, lng: -1.517513},
	          label: 'Ma',
	          map: map
        	});
        	var mercredi = new google.maps.Marker({
	          position: {lat: 47.1937838, lng: -1.5722043},
	          label: 'Me',
	          map: map
        	});
        	var jeudi = new google.maps.Marker({
	          position: {lat: 47.2242133, lng: -1.6256059},
	          label: 'J',
	          map: map
        	});
        	var vendredi = new google.maps.Marker({
	          position: {lat: 47.2054879, lng: -1.5652923},
	          label: 'V',
	          map: map
        	});
          }
        </script>
        <?php include "footer.php"; ?>
        
        
    </body>
</html>