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
                </div>
                <div class="backgroundArrow" id="scroll_ancre">
                    <a class="js-scroll" href="#scroll_ancre"><svg enable-background="new 0 0 26 26" id="Layer_1" version="1.1" viewBox="0 0 26 26" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><polygon points="0.046,2.582 2.13,0.498 12.967,11.334 23.803,0.498 25.887,2.582 12.967,15.502  "/><polygon points="0.046,13.582 2.13,11.498 12.967,22.334 23.803,11.498 25.887,13.582 12.967,26.502"/></g></svg></a>
                </div>
            </div>
        
            <section class="Intro">
                <div id="IntroBloc">
                    <div class="IntroContainer">
                        <p>Explication de nos interventions</p>
                    </div>
                        
                </div>
            </section>

            <section class="Interventions">
                <div class="TeamTitle">
                    <h2>Interventions</h2>
                </div>
                <div class="TeamMembers">
                    <div class="InterventionBox" id="Intervention01"></div>
                    <div cl3ass="InterventionBox" id="Intervention02"></div>
                    <div class="InterventionBox" id="Intervention03"></div>
                </div>
                    
            </section>
            <?php include "infos_comp.php"; ?>
        </div>
            
        <script type="text/javascript" src="js/map_contact.js"></script>
        <?php include "footer.php"; ?>

    </body>

</html>

