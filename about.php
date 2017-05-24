<?php

Try {
    $bdd = new PDO('mysql:host=localhost;dbname=food_truck; charset=utf8', 'root', 'root');
}
catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
$bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<!DOCTYPE HTML>

<html>
    <head>
        <title>À propos de nous ~ Chez FIFI - Food Truck Nantais | Cuisine réunionnaise</title>
        <link rel="shortcut icon" href="images/icon/logo.ico">
        <meta charset="utf-8" title="À propos de nous" content="Le Food Truck Chez FIFI vous propose des plats typiques réunionnais, simples et issus de produits de qualité tous les midis et soirs dans la région Nantaise.">
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
                    
                    <?php $subtitle= $bdd->query('SELECT texteId, texteContenu FROM texte WHERE texteId=74');
                    $sub= $subtitle->fetch();?>
                    <h1><?php echo $sub['texteContenu']; ?></h1>
                    
                    <?php $subtitle= $bdd->query('SELECT texteId, texteContenu FROM texte WHERE texteId=37');
                    $sub= $subtitle->fetch(); ?>
                    <h2><?php echo $sub['texteContenu']; ?></h2>
                    
                </div>
                <div class="backgroundArrow" id="scroll_ancre">
                    <a class="js-scroll" href="#scroll_ancre"><svg enable-background="new 0 0 26 26" id="Layer_1" version="1.1" viewBox="0 0 26 26" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><polygon points="0.046,2.582 2.13,0.498 12.967,11.334 23.803,0.498 25.887,2.582 12.967,15.502  "/><polygon points="0.046,13.582 2.13,11.498 12.967,22.334 23.803,11.498 25.887,13.582 12.967,26.502"/></g></svg></a>
                </div>
            </div>
            <section class="Infos" id="scroll_ancre">
                    <div class="InfosBloc">
                        <div class="InfosTitle">
                            
                        <?php $subtitle= $bdd->query('SELECT texteId, texteContenu FROM texte WHERE texteId=76');
                        $sub= $subtitle->fetch(); ?>
                        <h2><?php echo $sub['texteContenu']; ?></h2>
                            
                        </div>
                        <div class="InfosContainer">
                            <?php $subtitle= $bdd->query('SELECT texteId, texteContenu FROM texte WHERE texteId=75');
                            $sub= $subtitle->fetch(); ?>
                            <p><?php echo $sub['texteContenu']; ?></p>
                        </div>
                    </div>
            </section>
            
            <section class="Partners">
                <div id="PartnersBloc">
                    
                    <div class="PartnersTitle">
                        <h2>Partenaires et fournisseurs</h2>
                    </div>
                    
                    <div class="PartnersContainer">
                        
                        <?php
                        
                            $partenaire=$bdd->query("SELECT * FROM partenaire");
                        
                            while($part=$partenaire->fetch()){
                                $imagePartenaire=$bdd->query("SELECT imageSource FROM image WHERE imageId=" . $part['imageId']);
                                
                                while($imagePart=$imagePartenaire->fetch()){
                                    $textePartenaire=$bdd->query("SELECT texteContenu FROM texte WHERE texteId=" . $part['texteId']);
                                    
                                    while($textePart=$textePartenaire->fetch()){
                                    
                                        print_r("
                                           <a href='".$part['partenaireLien']."' target='_blank'>
                                           <div class='PartnersBox'>
                                                <img src='" . $imagePart['imageSource'] . "' title='". $part['partenaireNom']."' alt='". $part['partenaireNom']."' >
                                                <p>" . $textePart['texteContenu'] . "</p>
                                           </div>
                                        ");
                                    }
                                }
                            }
                        
                        ?>

                    </div>
                </div>
            </section>
            
            <section class="Team">
                <div class="TeamTitle">
                    <h2>L'équipe</h2>
                </div>
                
                <div class="CartesMembers">
                    
                    <?php
                    
                        $equipe=$bdd->query("SELECT * FROM equipe");
                        
                        while($equ=$equipe->fetch()){
                            $equipeImage=$bdd->query("SELECT imageSource FROM Image WHERE imageId=" . $equ['imageId']);
                            
                            while($equImage=$equipeImage->fetch()){
                                
                                print_r("
                                     <div class='flip-container' ontouchstart='this.classList.toggle('hover');'>
                                        <div class='flipper'>
                                            <div class='front'>
                                                <img alt='Photo de profil " . $equ['membrePrenom'] . "' title='" . $equ['membrePrenom'] . "' src='" . $equImage['imageSource'] . "'>
                                            </div>
                                            <div class='back'>
                                                <div class='logo'><a href='http://www.facebook.com' 'target='_blank'><svg baseProfile='tiny' id='Layer_1' version='1.2'' viewBox='0 0 24 24'' xml:space='preserve'' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><g><path d='M13,10h3v3h-3v7h-3v-7H7v-3h3V8.745c0-1.189,0.374-2.691,1.118-3.512C11.862,4.41,12.791,4,13.904,4H16v3h-2.1   C13.402,7,13,7.402,13,7.899V10z'/></g></svg></a></div>
                                                <p>" . $equ['membrePrenom'] . " " . $equ['membreNom'] . "</p>
                                                <img alt='Photo de profil Erwann' title='Erwann' src='images/pics/ProfilErwannSombre.jpg'>
                                            </div>
                                        </div>
                                    </div>                                   
                                "); 
                            }
                        }
                    ?>
                    


                </div>                                    
            </section>
            <?php include "infos_comp.php"; ?>
        </div>

        <?php include "footer.php"; ?>
        <a href="#" class="top"><img src="images/trash/fleche.png" title="Retour en haut"/></a>
    </body>
</html>

