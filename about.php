<!DOCTYPE HTML>

<html>
    <head>
        <title>À propos de nous</title>
        <meta charset="utf-8" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-99582752-1', 'auto');
            ga('send', 'pageview');
        </script>
    </head>
    <body>
        <?php 
            $page = 3;
            include "headerFront.php"; 
        ?>
        <div id="container">
            <div id="AProposBackground">
                <div id="AProposBackgroundImage"></div>
                <div class="backgroundTitle">
                    <h1>À PROPOS DE NOUS</h1>
                    <h2>Et si on vous parlait un peu de nous ?</h2>
                </div>
                <div class="backgroundArrow" id="scroll_ancre">
                    <a class="js-scroll" href="#scroll_ancre"><svg enable-background="new 0 0 26 26" id="Layer_1" version="1.1" viewBox="0 0 26 26" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><polygon points="0.046,2.582 2.13,0.498 12.967,11.334 23.803,0.498 25.887,2.582 12.967,15.502  "/><polygon points="0.046,13.582 2.13,11.498 12.967,22.334 23.803,11.498 25.887,13.582 12.967,26.502"/></g></svg></a>
                </div>
            </div>
            <section class="Infos" id="scroll_ancre">
                    <div class="InfosBloc">
                        <div class="InfosTitle">
                            <h2>Un food-truck, c'est quoi ?</h2>
                        </div>
                        <div class="InfosContainer">
                            <p>Largement inspiré de la street food en provenance des Etats Unis, le food truck est un nouveau concept de restauration nomade qui propose un service de restauration de qualité à emporter à bord d’un camion dit « truck ».</p>
                        </div>
                    </div>
            </section>
            <section class="Partners">
                <div id="PartnersBloc">
                    <div class="PartnersTitle">
                        <h2>Partenaires et fournisseurs</h2>
                    </div>
                    <div class="PartnersContainer">
                        <a href="http://www.ladodo.com">
                            <div class="PartnersBox" id="Partner01">
                                <img alt="Logo Bourbon La Dodo" title="Bourbon La Dodo" src="images/logos/bourbon.png">
                                <p>La Dodo, la bière préférée des Réunionnais !</p>
                        </div>
                        </a>
                        <a href="http://www.lapetitefermecarquefou.fr/">
                            <div class="PartnersBox" id="Partner02">
                                <img alt="Logo La petite ferme" title="La Petite Ferme" src="images/logos/Ferme.png">
                                <p>Notre petit producteur de volailles et boeuf !</p>
                            </div>
                        </a>
                        <a href="http://www.curenantais.com/">
                            <div class="PartnersBox" id="Partner03">
                                <img alt="Logo Curé Nantais" title="Curé nantais" src="images/logos/curenantais.png">
                                <p>Le Curé Nantais issu de la fromagerie artisanale à Pornic, en  Pays de Loire, est un fromage de tradition au lait cru affiné au Muscadet.</p>
                            </div>
                        </a>
                        <a href="https://www.coca-cola-france.fr/">
                            <div class="PartnersBox" id="Partner04">
                                <img alt="Logo Coca Cola" title="Coca Cola" src="images/logos/coca.png">
                                <p>Le seul et l'unique !</p>
                            </div>
                        </a>
                        <a href="http://www.leffetpei.re/">
                            <div class="PartnersBox" id="Partner05">
                                <img alt="Logo l'effet Péi" title="L'Effet Péi" src="images/logos/leffet-pei.png">
                                <p>Marque réunionnaise de prêt-à-porter, L'effet Péi représente la Réunion et la culture réunionnaise à travers ses collections.</p>
                            </div>
                        </a>
                        <a href="https://ecologie-reunion.com/">
                            <div class="PartnersBox" id="Partner06">
                                <img alt="Logo Écologie Réunion" title="Écologie Réunion" src="images/logos/ecolo_reunion.png">
                                <p>Association agréée au titre de la protection de l'environnement Ile de La Réunion.</p>
                            </div>
                        </a>
                        <a href="https://www.distram.com/">
                            <div class="PartnersBox" id="Partner07">
                                <img alt="Logo Distram" title="Distram" src="images/logos/logo-vertical-distram.png">
                                <p>Distram, expert et conseiller en restauration.</p>
                            </div>
                        </a>
                        <a href="http://www.minnantes.com/">
                            <div class="PartnersBox" id="Partner08">
                                <img alt="Logo MIN de Nantes" title="MIN de Nantes" src="images/logos/min_nantes.png">
                                <p>La marché d'intérêt national de Nantes, un acteur économique de l'agglomération nantaise.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
            <section class="Team">
                <div class="TeamTitle">
                    <h2>L'équipe</h2>
                </div>
                <div class="CartesMembers">
                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                                <img alt="Photo de profil Erwann" title="Erwann" src="images/pics/ProfilErwann.jpg">
                            </div>
                            <div class="back">
                                <div class="logo"><a href="#"><svg baseProfile="tiny" id="Layer_1" version="1.2" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M13,10h3v3h-3v7h-3v-7H7v-3h3V8.745c0-1.189,0.374-2.691,1.118-3.512C11.862,4.41,12.791,4,13.904,4H16v3h-2.1   C13.402,7,13,7.402,13,7.899V10z"/></g></svg></a></div>
                                <p>Erwann Guillevic</p>
                                <img alt="Photo de profil Erwann" title="Erwann" src="images/pics/ProfilErwannSombre.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                                <img alt="Photo de profil Antonin" title="Antonin" src="images/pics/ProfilAntonin.jpg">
                            </div>
                            <div class="back">
                                <div class="logo"><a href="#"><svg baseProfile="tiny" id="Layer_1" version="1.2" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M13,10h3v3h-3v7h-3v-7H7v-3h3V8.745c0-1.189,0.374-2.691,1.118-3.512C11.862,4.41,12.791,4,13.904,4H16v3h-2.1   C13.402,7,13,7.402,13,7.899V10z"/></g></svg></a></div>
                                <p>Antonin Douillard</p>
                                <img alt="Photo de profil Antonin" title="Antonin" src="images/pics/ProfilAntoninSombre.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                                <img alt="Photo de profil Geoffrey" title="Geoffrey" src="images/pics/ProfilGeoffrey.jpg">
                            </div>
                            <div class="back">
                                <div class="logo"><a href="#"><svg baseProfile="tiny" id="Layer_1" version="1.2" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M13,10h3v3h-3v7h-3v-7H7v-3h3V8.745c0-1.189,0.374-2.691,1.118-3.512C11.862,4.41,12.791,4,13.904,4H16v3h-2.1   C13.402,7,13,7.402,13,7.899V10z"/></g></svg></a></div>
                                <p>Geoffrey Moreau</p>
                                <img alt="Photo de profil Geoffrey" title="Geoffrey" src="images/pics/ProfilGeoffreySombre.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                                <img alt="Photo de profil Quentin" title="Quentin" src="images/pics/ProfilQuentin.jpg">
                            </div>
                            <div class="back">
                                <div class="logo"><a href="#"><svg baseProfile="tiny" id="Layer_1" version="1.2" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M13,10h3v3h-3v7h-3v-7H7v-3h3V8.745c0-1.189,0.374-2.691,1.118-3.512C11.862,4.41,12.791,4,13.904,4H16v3h-2.1   C13.402,7,13,7.402,13,7.899V10z"/></g></svg></a></div>
                                <p>Quentin Dijoux</p>
                                <img alt="Photo de profil Quentin" title="Quentin" src="images/pics/ProfilQuentinSombre.jpg">
                            </div>
                        </div>
                    </div>
                </div>                                    
            </section>
            <?php include "infos_comp.php"; ?>
        </div>
        <script type="text/javascript" src="js/map_contact.js"></script>
        <?php include "footer.php"; ?>
    </body>
</html>

