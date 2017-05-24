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
        <meta charset="utf-8" />
        <title></title>
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <?php $page = 4;
                include "headerFront.php"; ?>

        <?php $idarticle = $_GET['id'];
              $contenu= $bdd->query('SELECT articleTitre, texteId FROM article WHERE texteId ='.$idarticle);
        
        while ($article= $contenu->fetch()){
              $texte=$bdd->query('SELECT texteContenu, texteId FROM texte WHERE texteId ='.$idarticle);
            
              while ($texteArticle=$texte->fetch()){
            
                  print_r("
                    <div id='container'>
                        <div id='articleTotal'>
                            
                            <div id='articleTitle'>
                                <h1>" . $article['articleTitre'] . "</h1>
                            </div>
                            
                            <div id='articleContent'>
                                <p>" . $texteArticle['texteContenu'] . "</p>
                            </div>
                        </div>
                    
                  "); } } 
        
        ?>



        <div id="articleBack">
            <a href="blog.php">Retour à la liste des articles</a>
        </div>


        <div id="blogArticlesArticles">

            <?php $article=$bdd->query('SELECT * FROM article ORDER BY RAND() LIMIT 3');
                                  
                            
                            while($art=$article->fetch()){
                                $imageArticle=$bdd->query("SELECT imageSource FROM Image WHERE imageId=" . $art['imageId']);
                                
                                while($imageArt=$imageArticle->fetch()){
                                    
                                    print_r(" 
                                    
                                        <a href='article.php?id=". $art['texteId'] ."' >
                                            <div>
                                                <article class=" /*. $art['ArticleCategorieAll'] */ . $art['ArticleCategorie'] . ">
                                                    <img src=" . $imageArt['imageSource'] . " alt=" . $art['ArticleCategorie'] . " title=" . $art['ArticleCategorie'] . ">
                                                    <p>" . $art['articleTitre'] . "</p>
                                                </article>
                                            </div>
                                        </a>
                                    "); } } ?>
        </div>

        <?php include "infos_comp.php"; ?>
        <?php print_r("</div>") ?>




        <?php include "footer.php"; ?>


        <a href="#" class="top"><img src="images/trash/fleche.png" title="Retour en haut" /></a>
    </body>

    </html>
