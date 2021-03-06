<?php

    Try {
        $bdd = new PDO('mysql:host=localhost;dbname=food_truck; charset=utf8', 'root', '');
    }
    catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage()); 
    }
    $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>


<!DOCTYPE HTML>

<html>
    <head>
        <title>Prestations privées ~ Chez FIFI - Food Truck Nantais</title>
        <link rel="shortcut icon" href="images/icon/logo.ico">
        <meta charset="utf-8" title="À propos de nous" content="Le Food Truck Chez FIFI vous propose des plats typiques réunionnais, simples et issus de produits de qualité pour vos événements privés.">
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
            $page = 2;
            include "headerFront.php"; 
        ?>
        <div id="container">
            <div id="EventsBackground">
                <div id="EventsBackgroundImage"></div>
                <div class="backgroundTitle">
                    
                    <?php $subtitle= $bdd->query('SELECT texteId, texteContenu FROM texte WHERE texteId=73');
                    $sub= $subtitle->fetch();?>
                    <h1><?php echo $sub['texteContenu']; ?></h1>
                    
                    <?php $subtitle= $bdd->query('SELECT texteId, texteContenu FROM texte WHERE texteId=36'); 
                    $sub= $subtitle->fetch();?>
                    <h2><?php echo $sub['texteContenu']; ?></h2>
                </div>
                <div class="backgroundArrow" id="scroll_ancre">
                    <a class="js-scroll" href="#scroll_ancre"><svg enable-background="new 0 0 26 26" id="Layer_1" version="1.1" viewBox="0 0 26 26" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><polygon points="0.046,2.582 2.13,0.498 12.967,11.334 23.803,0.498 25.887,2.582 12.967,15.502  "/><polygon points="0.046,13.582 2.13,11.498 12.967,22.334 23.803,11.498 25.887,13.582 12.967,26.502"/></g></svg></a>
                </div>
            </div>
            <section class="Presentation">
                <div id="Intro">
                    
                    <?php
                        $informations=$bdd->query("SELECT texteId, texteContenu FROM texte WHERE texteId=69");
                        $inf= $informations->fetch();
                    ?>
                    
                    <p><?php echo $inf['texteContenu']; ?></p>
                </div>    
                <a title="Prenez rendez-vous !" href="contact.php">
                    <svg style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; fill-rule:evenodd; clip-rule:evenodd;" version="1.1" viewBox="0 0 130 130" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Layer_x0020_1"><g id="_298675192"><g><path class="fil0" d="M68 31c19,3 28,12 30,30 0,1 0,1 0,1 0,2 0,4 2,4 2,0 2,-2 2,-3 0,-1 0,-1 0,-1 0,-18 -15,-34 -33,-35 -2,0 -4,-1 -5,2 0,2 3,2 4,2z"/><path class="fil0" d="M72 36c-2,0 -4,-1 -5,2 0,2 2,2 4,2 12,3 16,7 18,18 0,1 0,2 0,2 0,1 0,3 2,2 1,0 2,-1 2,-1 0,-1 0,-2 0,-3 0,-10 -10,-20 -21,-22z"/><path class="fil0" d="M73 45c-1,0 -2,0 -3,2 -1,2 1,2 2,2 5,1 8,4 8,8 0,1 0,2 1,2 0,0 1,1 1,1 1,0 1,-1 1,-1 1,0 1,-1 1,-3 0,-5 -6,-11 -11,-11z"/><path class="fil0" d="M97 82c-2,-2 -5,-4 -7,-5 -5,-4 -10,-4 -13,1 -2,4 -5,4 -8,2 -9,-3 -15,-9 -19,-17 -1,-2 -1,-3 -1,-4 0,-2 1,-4 3,-6 2,-1 4,-3 4,-6 0,-4 -10,-17 -13,-18 -2,-1 -4,-1 -5,0 -9,3 -13,10 -9,18 2,5 4,10 6,14 11,18 28,32 49,41 1,0 3,1 4,1 6,0 12,-6 14,-11 2,-5 -2,-8 -5,-10z"/></g><path class="fil0 str0" d="M130 65c-1,36 -29,65 -65,65 -36,0 -65,-29 -65,-65 0,-36 29,-65 65,-65l65 0 0 65 0 0zm-65 -58c32,0 58,26 58,58l0 0c0,32 -26,58 -58,58 -32,0 -58,-26 -58,-58 0,-32 26,-58 58,-58z"/></g></g></svg>
                </a>
            </section>
            <section class="Interventions">
                <div class="InterTitle">
                    <h2>Interventions</h2>
                </div>
                <div class="InterPics">
                  
                        
                        <?php 
                            $evenement=$bdd->query("SELECT * FROM evenement");
                            while($even=$evenement->fetch()){
                                $imageEvenement=$bdd->query("SELECT imageSource FROM image WHERE imageId=" . $even['imageId']);
                                
                                while($imageEven=$imageEvenement->fetch()){
                                    $texteEvenement=$bdd->query("SELECT texteContenu FROM texte WHERE texteId=" .$even['texteId']);
                                    
                                    while($texteEven=$texteEvenement->fetch()){
                                    print_r(" 
                                    
                                    <div class='InterBox'>
                                        <img src=" . $imageEven['imageSource'] . " alt='Evenement' title='Evenement'>
                                        <h3>" . $even['eventTitre'] . "</h3>
                                        <p>" . $texteEven['texteContenu'] . "</p>
                                    </div>
                                    
                                            ");}}} ?>
                    
                </div>    
            </section>
            <?php include "infos_comp.php"; ?>
        </div>
            

        <?php include "footer.php"; ?>
        <a href="#" class="top"><img src="images/trash/fleche.png" title="Retour en haut"/></a>

    </body>

</html>