<!DOCTYPE HTML>

<html>
    
	<head>
		<title>Prestations privées</title>
        <meta charset="utf-8"/>
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

            <div id="blogBackground_Events">

                <div id="backgroundImage_Events"></div>
                <div id="blogBackgroundTitle">
                    <h1>PRESTATIONS PRIVÉES</h1>
                </div>
                <div id="blogBackgroundArrow">
                    <a href="#blogArticles"><svg enable-background="new 0 0 26 26" id="Layer_1" version="1.1" viewBox="0 0 26 26" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><polygon points="0.046,2.582 2.13,0.498 12.967,11.334 23.803,0.498 25.887,2.582 12.967,15.502  "/><polygon points="0.046,13.582 2.13,11.498 12.967,22.334 23.803,11.498 25.887,13.582 12.967,26.502"/></g></svg></a>
                </div>
            </div>

            <div id="EventsInterdiv01">

                <div id="EventsInterdiv01Container">
                    <h2>Explication de nos interventions</h2>
              

                <div id="blogCategories">
                    <p>Afficher les résultats par catégories</p>
                    <ul>
                        <button class="category" data-rel="all">Tout</button>
                        <button class="category" data-rel="cook">Cuisine</button>
                        <button class="category" data-rel="foodtruck">Food truck</button>
                    </ul>
                </div>


                <div id="blogArticlesArticles">
                    <a href="#">
                        <div>
                            <article class="all foodtruck">
                                <img src="images/articles/articleOne.jpg" alt="Food truck" title="Food truck">
                                <p>Conseils pour bien gérer son food truck</p>
                            </article>
                        </div>
                    </a>

                    <a href="#">
                        <div>
                            <article class="all foodtruck">
                                <img src="images/articles/articleTwo.jpg" alt="Food truck" title="Food truck">
                                <p>Etre traiteur en food truck</p>
                            </article>
                        </div>
                    </a>

                    <a href="#">
                        <div>
                            <article class="all cook">
                                <img src="images/articles/articleThree.jpg" alt="Food truck" title="Food truck">
                                <p>La cuisine créole : nouvelle à Nantes</p>
                            </article>
                        </div>
                    </a>

                    <a href="#">
                        <div>
                            <article class="all foodtruck">
                                <img src="images/articles/articleFour.jpg" alt="Food truck" title="Food truck">
                                <p>Points stratégiques de l’activité d’un food truck</p>
                            </article>
                        </div>
                    </a>

                    <a href="#">
                        <div>
                            <article class="all foodtruck">
                                <img src="images/articles/articleFive.jpg" alt="Food truck" title="Food truck">
                                <p>L’évolution du marché des food trucks</p>
                            </article>
                        </div>
                    </a>

                </div>
                </div>

            </div>
        </div>

        <div id="blogTestimony">

        </div>
    </body>

</html>

