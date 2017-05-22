<!DOCTYPE HTML>
<html>
	<head>
		<title>Accueil</title>
        <meta charset="utf-8"/>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <link rel="stylesheet" type="text/css" href="slick/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick/slick-theme.css"/>
	</head>
	<body>
        
		<?php $page = 0;
        include "headerFront.php"; ?>
		
        <div id="container">
            <div id="indexBackground">

                <div id="backgroundImage">
                </div>
                <div id="indexBackgroundTitle">
                    <h1>ACCEUIL</h1>
                </div>
                <div id="indexBackgroundArrow" id="scroll_ancre">
                    <a class="js-scroll" href="#scroll_ancre"><svg enable-background="new 0 0 26 26" id="Layer_1" version="1.1" viewBox="0 0 26 26" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><polygon points="0.046,2.582 2.13,0.498 12.967,11.334 23.803,0.498 25.887,2.582 12.967,15.502  "/><polygon points="0.046,13.582 2.13,11.498 12.967,22.334 23.803,11.498 25.887,13.582 12.967,26.502"/></g></svg></a>
                </div>
            </div>
            <div class="index-container">
                <div class="text-container" id="scroll_ancre">
                        <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                            parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum
                            felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                            porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus
                            varius laoreet. </p>
                </div>
                <div class="image-container">
                    <div class="single-item">
                        <div><img class="carousel1 carousel" src="images/index/carrousel01.png" alt="" title=""/></div>
                        <div><img class="carousel2 carousel" src="images/index/carrousel02.png" alt="" title=""/></div>
                        <div><img class="carousel3 carousel" src="images/index/carrousel03.png" alt="" title=""/></div>
                    </div>
                    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
                    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
                    <script type="text/javascript" src="slick/slick/slick.min.js"></script>
                    <script src="https://npmcdn.com/isotope-layout@3.0.1/dist/isotope.pkgd.js"></script>
                    <script src="js/caroussel.js"></script>
                </div>
                <div class="formules">
                    <h2>NOS SPECIALITES</h2>
                    <div class="bouchons">
                       <img src="images/index/pic_BouchonGratine.png">
                       <div class="description">
                           <h3> BOUCHON GRATINE</h3>
                           <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                           parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec</p>
                           <a href="#"> En savoir plus </a>
                       </div>
                    </div>
                    <div class="rougail">
                        <div class="description">
                            <h3> ROUGAIL SAUCISSE</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                            parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec</p>
                            <a href="#"> En savoir plus </a>
                        </div>
                        <img src="images/index/pic_rougail.png">

                    </div>
                </div>
                <div class="events">
                    <div class="title">
                        <h2>EVENEMENTS SPECIAUX</h2>
                        <h3>INTERVENTIONS</h3>
                    </div>
                    <div class="SvgIntervention">
                        <img src="images/index/camion.svg">
                        <img src="images/index/gateau.svg">
                        <img src="images/index/coeur.svg">
                    </div>
                    <div class="TextIntervention">
                        <p> porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus
                            varius laoreet.porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus
                            varius laoreet.porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus
                            varius laoreet.porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus
                            varius laoreet.</p>
                        <a href="#"> En savoir plus</a>
                    </div>
                </div>
                <div class="information">
                    <div class="horairesacceuil">
                        <div class="journéeacceuil">
                            <div class="détails">
                                <p class="jouracceuil">Mardi</p>
                                <p class="adresseacceuil">8 boulevard des Pas Enchantés 44200 Nantes</p>
                                <p>Midi :</p>
                                <p>11h30 - 14h30</p>
                                <p class="Soiracceuil">Soir :</p>
                                <p>19h30 - 22h30</p>
                            </div>
                            <div class="détails">
                                <p class="jouracceuil">Mercredi</p>
                                <p class="adresseacceuil">20 Boulevard De Gaules 44200 Nantes</p>
                                <p>Midi :</p>
                                <p>11h30 - 14h30</p>
                                <p class="Soiracceuil">Soir :</p>
                                <p>19h30 - 22h30</p>
                            </div>
                            <div class="détails">
                                <p class="jouracceuil">Jeudi</p>
                                <p class="adresseacceuil">Adresse Compléte</p>
                                <p>Midi :</p>
                                <p>11h30 - 14h30</p>
                                <p class="Soiracceuil">Soir :</p>
                                <p>19h30 - 22h30</p>
                            </div>
                            <div class="détails">
                                <p class="jouracceuil">Vendredi</p>
                                <p class="adresseacceuil">Adresse Compléte</p>
                                <p>Midi :</p>
                                <p>11h30 - 14h30</p>
                                <p class="Soiracceuil">Soir :</p>
                                <p>19h30 - 22h30</p>
                            </div>
                        </div>
                    </div>
                    <div class="Mapacceuil">
                        <p> MAP </p>
                    </div>
            </div>
		</div>
        <?php include "infos_comp.php"; ?>
        </div>
        
		<?php include "footer.php"; ?>

        <a href="#" class="top"><img src="images/fleche.png" title="Retour en haut"/></a>
        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/retourenhaut.js" type="text/javascript"></script>

	</body>
</html>