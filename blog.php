<?php

    Try {
        $bdd = new PDO('mysql:host=localhost;dbname=food_truck; charset=utf8', 'root', '');
    }
    catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage()); 
    }
    $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>Actualités ~ Chez FIFI - Food Truck Nantais | Cuisine réunionnaise</title>
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
        <?php $page = 4;
            include "headerFront.php"; ?>
        <div id="container">
            <div id="blogBackground">
                <div id="blogBackgroundImage"></div>
                <div class="backgroundTitle">
                    
                    <?php $subtitle= $bdd->query('SELECT texteId, texteContenu FROM texte WHERE texteId=72');
                    $sub= $subtitle->fetch();?>
                    <h1><?php echo $sub['texteContenu']; ?></h1>
                    
                    <?php $subtitle= $bdd->query('SELECT texteId, texteContenu FROM texte WHERE texteId=38'); 
                    $sub= $subtitle->fetch();?>
                    <h2><?php echo $sub['texteContenu']; ?></h2>
                    
                </div>
                <div class="backgroundArrow" id="scroll_ancre">
                    <a class="js-scroll" href="#scroll_ancre"><svg enable-background="new 0 0 26 26" id="Layer_1" version="1.1" viewBox="0 0 26 26" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><polygon points="0.046,2.582 2.13,0.498 12.967,11.334 23.803,0.498 25.887,2.582 12.967,15.502  "/><polygon points="0.046,13.582 2.13,11.498 12.967,22.334 23.803,11.498 25.887,13.582 12.967,26.502"/></g></svg></a>
                </div>
            </div>
            <div class="blogArticles" id="scroll_ancre">
                <div id="blogArticlesTitle">
                    <h2>Actualités</h2>
                </div>
                <div id="blogCategories">
                    <p>Afficher les articles par catégorie</p>
                    <button class="category" data-rel="all">Tout</button>
                    <button class="category" data-rel="cook">Cuisine</button>
                    <button class="category" data-rel="foodtruck">Food truck</button>
                </div>
                
                
                <div id="blogArticlesArticles">
                            
                    <?php $article=$bdd->query('SELECT * FROM article');


                    while($art=$article->fetch()){
                        $imageArticle=$bdd->query("SELECT imageSource FROM Image WHERE imageId=" . $art['imageId']);

                        while($imageArt=$imageArticle->fetch()){

                            print_r(" 

                                <a href='article.php?id=". $art['texteId'] ."' >
                                    <div>
                                        <article class='" . $art['ArticleCategorie'] . "'>
                                            <img src='" . $imageArt['imageSource'] . "' alt='" . $art['ArticleCategorie'] . "' title='" . $art['ArticleCategorie'] . "'>
                                            <p>" . $art['articleTitre'] . "</p>
                                        </article>
                                    </div>
                                </a>
                            "); } } ?>
                </div>
                
            </div>
            <div id="blogTestimony">
                <div id="blogTestimonyTitle">
                    <h2>Témoignages</h2>
                </div>
                
                <?php 
                    $testimonyImage=$bdd->prepare('SELECT * FROM image WHERE imageId = ?'); 
                    $testimonyImage->bindParam('1', $imageId);
                        
                    $testimonyTexte=$bdd->prepare('SELECT * FROM texte WHERE texteId = ?');
                    $testimonyTexte->bindParam('1', $texteId);
                ?>
                
                <div id="blogTestimonyTestimonials">
                    <div>
                        <div class="blogTestimonyTestimonialsImage">
                            <div>
                                <?php 
                                    $imageId = 14;
                                    $testimonyImage->execute();
                                    $tesImage = $testimonyImage->fetch(); 
                                ?>
                                <img src="<?php print_r($tesImage['1']); ?>" alt="Témoignage" title="Témoignage">
                            </div>
                            <div>
                                <h3>Christelle</h3>
                                <h4>Le 18/05/2017</h4>
                            </div>
                        </div>
                        <?php
                            $texteId = 11;
                            $testimonyTexte->execute();
                            $testTexte = $testimonyTexte->fetch();
                        ?>
                        <p><?php echo $testTexte['1']; ?></p>
                    </div>

                    <div>
                        <div class="blogTestimonyTestimonialsImage">
                            <div>
                                <?php 
                                    $imageId = 15;
                                    $testimonyImage->execute();
                                    $tesImage = $testimonyImage->fetch(); 
                                ?>
                                <img src="<?php print_r($tesImage['1']); ?>" alt="Témoignage" title="Témoignage">
                            </div>
                            <div>
                                <h3>Jacques</h3>
                                <h4>Le 22/05/2017</h4>
                            </div>
                        </div>
                        <?php
                            $texteId = 12;
                            $testimonyTexte->execute();
                            $testTexte = $testimonyTexte->fetch();
                        ?>
                        <p><?php echo $testTexte['1']; ?></p>
                    </div>

                    <div>
                        <div class="blogTestimonyTestimonialsImage">
                            <div>
                                <?php 
                                    $imageId = 16;
                                    $testimonyImage->execute();
                                    $tesImage = $testimonyImage->fetch(); 
                                ?>
                                <img src="<?php print_r($tesImage['1']); ?>" alt="Témoignage" title="Témoignage">
                            </div>
                            <div>
                                <h3>Léo</h3>
                                <h4>Le 18/05/2017</h4>
                            </div>
                        </div>
                        <?php
                            $texteId = 13;
                            $testimonyTexte->execute();
                            $testTexte = $testimonyTexte->fetch();
                        ?>
                        <p><?php echo $testTexte['1']; ?></p>
                    </div>
                </div>
            </div>
            <?php include "infos_comp.php"; ?>
        </div>

        <?php include "footer.php"; ?>
        <a href="#" class="top"><img src="images/trash/fleche.png" title="Retour en haut"/></a>

    </body>

</html>
