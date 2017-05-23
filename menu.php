<?php

    Try {
        $bdd = new PDO('mysql:host=localhost;dbname=food_truck; charset=utf8', 'root', 'root');
    }
    catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage()); 
    }
    $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<!DOCTYPE html>

<html>

    <head>
        <title>Nos menus ~ Chez FIFI - Food Truck Nantais | Cuisine réunionnaise</title>
        <link rel="shortcut icon" href="images/icon/logo.ico">
        <meta charset="utf-8" title="À propos de nous" content="Le Food Truck Chez FIFI vous propose des plats typiques réunionnais, simples et issus de produits de qualité tous les midis et soirs dans la région Nantaise.">
        <link href="css/style.css" rel="stylesheet">
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
       
        <?php $page = 1;
        include "headerFront.php"; ?>

        <div id="container">

            <div id="menuBackground">

                <div id="menuBackgroundImage"></div>
                <div class="backgroundTitle">
                    <h1>NOS MENUS</h1>
                    
                    <?php $subtitle= $bdd->query('SELECT texteId, texteContenu FROM texte WHERE texteId=35'); 
                    $sub= $subtitle->fetch();?>
                    <h2><?php echo $sub['texteContenu']; ?></h2>
                    
                </div>
                <div class="backgroundArrow" id="scroll_ancre">
                    <a class="js-scroll" href="#scroll_ancre"><svg enable-background="new 0 0 26 26" id="Layer_1" version="1.1" viewBox="0 0 26 26" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><polygon points="0.046,2.582 2.13,0.498 12.967,11.334 23.803,0.498 25.887,2.582 12.967,15.502  "/><polygon points="0.046,13.582 2.13,11.498 12.967,22.334 23.803,11.498 25.887,13.582 12.967,26.502"/></g></svg></a>
                </div>
                
            </div>
            
            <div id="menuSetMenu" id="scroll_ancre">
                
                <div id="menuSetMenuTitle">
                    <h2>Nos formules</h2>
                </div>
                
                <div id="menuSetMenuContainer">
                    
                    <?php  
                        $menu=$bdd->query("SELECT * FROM menu");
                    
                        while($men=$menu->fetch()){
                            print_r("
                        <div class='menuSetMenuContainer'>
                            <div class='menuSetMenuContainerTop'>
                                <p><strong>" . $men['menuTitre'] . "</strong></p>
                                <p>" . $men['menuComposition'] . "</p>
                                <p>" . $men['menuPrixL'] . "€ ou " . $men['menuPrixXL'] . "€</p>
                                <p>Disponibilité : " . $men['Disponibilité'] . "</p>
                            </div>
                            <div class='menuSetMenuContainerBottom'>
                                <div>
                                    <p><span>Entrée :</span></p>
                                    <p>" . $men['menuEntree'] . "</p>
                                    <p><span>Plat :</span></p>
                                    <p>" . $men['menuPlat'] . "</p>
                                    <p><span>Dessert :</span></p>
                                    <p>" . $men['menuDessert'] . "</p>
                                </div>
                                <div>
                                    <p><span>Boisson :</span></p>
                                    <p>" . $men['menuBoisson'] . "</p>
                                </div>
                            </div>
                        </div>");} ?>
                    
                </div>
                
            </div>
            
            <div id="menuBoardContainer">
                
                <div id="menuBoardTitle">
                    <h2>A la carte</h2>
                </div>
                
                <div id="menuBoardBoard">
                    <table>
                        <tr>
                            <th>Produits</th>
                            <th>L</th>
                            <th>XL</th>
                        </tr>
                        
                        <?php 
                            $produits=$bdd->query("SELECT nourriturePrixL, nourriturePrixXL, nourritureNom FROM nourriture");
                        
                            while($prod=$produits->fetch()){
                                print_r("
                                    <tr>
                                        <td>" . $prod['nourritureNom'] . "</td>
                                        <td class='menuBoardBoardTD'>" . $prod['nourriturePrixL'] . "</td>
                                        <td class='menuBoardBoardTD''>" . $prod['nourriturePrixXL'] . "</td>
                                    </tr>
                                ");}
                        ?>
                        
                    </table>
                </div>
                
            </div>
            
            <?php include "infos_comp.php"; ?>
        
        </div>
        
        <?php include "footer.php"; ?>
        
    </body>
    
</html>