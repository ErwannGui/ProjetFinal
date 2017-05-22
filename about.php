<!DOCTYPE HTML>

<html>

    <head>
        <title>À propos de nous</title>
        <meta charset="utf-8" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>

    </head>

    <body>

        <!--<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="js/filtrage.js"></script>-->

        <?php 
            $page = 3;
            include "headerFront.php"; 
        ?>

        <div id="container">

            <div id="AProposBackground">

                <div id="AProposBackgroundImage"></div>
                <div class="backgroundTitle">
                    <h1>À PROPOS DE NOUS</h1>
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
                            <p>Largement inspiré de la street food en provenance des Etats Unis, le food truck est un nouveau concept de restauration nomade qui propose un service de restauration de qualité à emporter à bord d'un camion dit « truck ».</p>
                        </div>
                    </div>
                </section>

                <section class="Partners">
                    <div id="PartnersBloc">
                        <div class="PartnersTitle">
                            <h2>Partenaires et fournisseurs</h2>
                        </div>
                        <div class="PartnersContainer">
                            <div class="PartnersBox" id="Partner01">
                                <p>01 Texte descriptif apparaissant au passage de la souris</p>
                            </div>
                            <div class="PartnersBox" id="Partner02">
                                <p>02 Texte descriptif apparaissant au passage de la souris</p>
                            </div>
                            <div class="PartnersBox" id="Partner03">
                                <p>03 Texte descriptif apparaissant au passage de la souris</p>
                            </div>
                            <div class="PartnersBox" id="Partner04">
                                <p>04 Texte descriptif apparaissant au passage de la souris</p>
                            </div>
                            <div class="PartnersBox" id="Partner05">
                                <p>05 Texte descriptif apparaissant au passage de la souris</p>
                            </div>
                            <div class="PartnersBox" id="Partner06">
                                <p>06 Texte descriptif apparaissant au passage de la souris</p>
                            </div>
                            <div class="PartnersBox" id="Partner07">
                                <p>07 Texte descriptif apparaissant au passage de la souris</p>
                            </div>
                            <div class="PartnersBox" id="Partner08">
                                <p>08 Texte descriptif apparaissant au passage de la souris</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="Team">
                    <div class="TeamBloc">
                        <div class="TeamTitle">
                            <h2>L'équipe</h2>
                        </div>
                        <div class="TeamMembers">
                            <div class="TeamMembersBox" id="TeamMembers01"></div>
                            <div class="TeamMembersBox" id="TeamMembers02"></div>
                            <div class="TeamMembersBox" id="TeamMembers03"></div>
                            <div class="TeamMembersBox" id="TeamMembers04"></div>
                        </div>
                    </div>
                    
                </section>
                <?php include "infos_comp.php"; ?>
            </div>
            
            <script type="text/javascript" src="js/map_contact.js"></script>
            <?php include "footer.php"; ?>

    </body>

</html>

