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
                    <a href="article.php">
                        <div>
                            <article class="all foodtruck">
                                <img src="images/articles/articleOne.jpg" alt="Food truck" title="Food truck">
                                <p>Conseils pour bien gérer son food truck</p>
                            </article>
                        </div>
                    </a>
                    <a href="article.php">
                        <div>
                            <article class="all foodtruck cook">
                                <img src="images/articles/articleTwo.jpg" alt="Food truck" title="Food truck">
                                <p>Etre traiteur en food truck</p>
                            </article>
                        </div>
                    </a>
                    <a href="article.php">
                        <div>
                            <article class="all cook">
                                <img src="images/articles/articleThree.jpg" alt="Food truck" title="Food truck">
                                <p>La cuisine créole : nouvelle à Nantes</p>
                            </article>
                        </div>
                    </a>
                
        </div>   <?php include "infos_comp.php"; ?>
       <?php print_r("</div>") ?>

           

        
<?php include "footer.php"; ?>
     
        
        <a href="#" class="top"><img src="images/trash/fleche.png" title="Retour en haut"/></a>
    </body>

</html>
