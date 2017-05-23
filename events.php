<!DOCTYPE HTML>

<html>

    <head>
        <title>Prestations privées</title>
        <meta charset="utf-8" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>

    </head>

    <body>

        <!--<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="js/filtrage.js"></script>-->

        <?php 
            $page = 2;
            include "headerFront.php"; 
        ?>

        <div id="container">

            <div id="EventsBackground">

                <div id="EventsBackgroundImage"></div>
                <div class="backgroundTitle">
                    <h1>PRESTATIONS PRIVÉES</h1>
                    <h2>Food truck, mais aussi traiteur !</h2>
                </div>
                <div class="backgroundArrow" id="scroll_ancre">
                    <a class="js-scroll" href="#scroll_ancre"><svg enable-background="new 0 0 26 26" id="Layer_1" version="1.1" viewBox="0 0 26 26" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><polygon points="0.046,2.582 2.13,0.498 12.967,11.334 23.803,0.498 25.887,2.582 12.967,15.502  "/><polygon points="0.046,13.582 2.13,11.498 12.967,22.334 23.803,11.498 25.887,13.582 12.967,26.502"/></g></svg></a>
                </div>
            </div>
        
            <section class="Intro">
                <div id="IntroBloc">
                    
                    <p>Chez Fifi est un Food Truck proposant une offre à partir de produits frais, locaux et réunionnais. Pour vos événements nous élaborons avec vous une offre sur mesure: rougails saucisses, cari de poulet ... Notre camion au design original, notre cuisine faite maison et la qualité des produits utilisés laisseront un souvenir visuel et gustatif à vos convives. Ainsi si vous êtes intéressés par nos prestations de traiteur, n'hésitez plus pour apporter originalité et goût à votre réception, optez pour notre camion ! Pour permettre que cet évènement soit la plus belle des fêtes, et ce jusque dans vos assiettes!</p>
                </div>    
                    <svg style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; fill-rule:evenodd; clip-rule:evenodd;" version="1.1" viewBox="0 0 130 130" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Layer_x0020_1"><g id="_298675192"><g><path class="fil0" d="M68 31c19,3 28,12 30,30 0,1 0,1 0,1 0,2 0,4 2,4 2,0 2,-2 2,-3 0,-1 0,-1 0,-1 0,-18 -15,-34 -33,-35 -2,0 -4,-1 -5,2 0,2 3,2 4,2z"/><path class="fil0" d="M72 36c-2,0 -4,-1 -5,2 0,2 2,2 4,2 12,3 16,7 18,18 0,1 0,2 0,2 0,1 0,3 2,2 1,0 2,-1 2,-1 0,-1 0,-2 0,-3 0,-10 -10,-20 -21,-22z"/><path class="fil0" d="M73 45c-1,0 -2,0 -3,2 -1,2 1,2 2,2 5,1 8,4 8,8 0,1 0,2 1,2 0,0 1,1 1,1 1,0 1,-1 1,-1 1,0 1,-1 1,-3 0,-5 -6,-11 -11,-11z"/><path class="fil0" d="M97 82c-2,-2 -5,-4 -7,-5 -5,-4 -10,-4 -13,1 -2,4 -5,4 -8,2 -9,-3 -15,-9 -19,-17 -1,-2 -1,-3 -1,-4 0,-2 1,-4 3,-6 2,-1 4,-3 4,-6 0,-4 -10,-17 -13,-18 -2,-1 -4,-1 -5,0 -9,3 -13,10 -9,18 2,5 4,10 6,14 11,18 28,32 49,41 1,0 3,1 4,1 6,0 12,-6 14,-11 2,-5 -2,-8 -5,-10z"/></g><path class="fil0 str0" d="M130 65c-1,36 -29,65 -65,65 -36,0 -65,-29 -65,-65 0,-36 29,-65 65,-65l65 0 0 65 0 0zm-65 -58c32,0 58,26 58,58l0 0c0,32 -26,58 -58,58 -32,0 -58,-26 -58,-58 0,-32 26,-58 58,-58z"/></g></g>
                    </svg>
            </section>
            <section class="Interventions">
                <div class="InterTitle">
                    <h2>Interventions</h2>
                </div>
                <div class="Inter">
                    <div class="InterBox" id="Inter01">
                        <img alt="Photo Anniversaire" title="Anniversaire" src="images/interventions/anniversaire.png">
                    </div>
                    <div class="InterBox" id="Inter02">
                        <img alt="Photo Repas Entreprise" title="Repas d'entreprise" src="images/interventions/businessMeal.png">
                    </div>
                    <div class="InterBox" id="Inter03">
                        <img alt="Photo mariage" title="Mariage" src="images/interventions/mariage.png">
                    </div>
                </div>    
            </section>
            <?php include "infos_comp.php"; ?>
        </div>
            
        <script type="text/javascript" src="js/map_contact.js"></script>
        <?php include "footer.php"; ?>

    </body>

</html>

