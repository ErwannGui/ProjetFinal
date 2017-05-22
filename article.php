<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8" />
        <title>Titre de l'article</title>
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <?php $page = 4;
                include "headerFront.php"; ?>

        <div id="container">

            <div id="articleTotal">

                <div id="articleTitle">
                    <h1>L’évolution du marché des food trucks</h1>
                </div>

                <div id="articleContent">
                    <p>Le food truck est un concept importé des États Unis qui est arrivé en France en 2009 à Paris puis depuis 2011 dans les autres villes de France. Le principe du food truck est d’utiliser un camion pour cuisiner et vendre de la nourriture aux passants. Ainsi le cuisinier peut changer d’endroit en fonction des événements et des habitudes de déplacement des gens.</p>

                    <p>Ce concept s’est beaucoup développé en France ces dernières années. En effet depuis 2011 le nombre de camions a littéralement explosé ! Ainsi en 2015 on comptabilisait déjà plus de 400 food trucks dans l’hexagone dont une grande partie dans la capitale.</p>

                    <p>Avec ce développement on peut retrouver toute sorte de cuisine : pizzas, sandwichs, sushis mais aussi des cuisines plus exotiques comme de la cuisine chinoise ou réunionnaise.</p>

                    <p>Les marques de grande distribution ont aussi misé sur ces food truck pour aller à la rencontre des consommateurs dans l’espoir de vendre encore plus et de faire découvrir de nouveaux produits aux clients.</p>

                    <p>Aujourd’hui le food truck est en perpétuel mouvement, de nouveaux food truck sont créés chaque semaine avec de nouveaux concepts pour être orignal et ainsi récupérer de nouveaux clients.</p>
                </div>
                
              
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
                </div>
            </div>

            <?php include "infos_comp.php"; ?>

        </div>

        <?php include "footer.php"; ?>

    </body>

</html>
