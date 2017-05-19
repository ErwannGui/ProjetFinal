<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8" />
        <title>Actualités</title>
        <link href="css/style.css" rel="stylesheet">
    </head>
    
    <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="js/filtrage.js"></script>
    <script src="js/scroll.js"></script>

    <body>

        <?php $page = 4;
        include "headerFront.php"; ?>

        <div id="container">

            <div id="blogBackground">

                <div id="blogBackgroundImage"></div>
                <div class="backgroundTitle">
                    <h1>BLOG ET ACTUALITES</h1>
                </div>
                <div class="backgroundArrow">
                    <a href="#blogArticles"><svg enable-background="new 0 0 26 26" id="Layer_1" version="1.1" viewBox="0 0 26 26" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><polygon points="0.046,2.582 2.13,0.498 12.967,11.334 23.803,0.498 25.887,2.582 12.967,15.502  "/><polygon points="0.046,13.582 2.13,11.498 12.967,22.334 23.803,11.498 25.887,13.582 12.967,26.502"/></g></svg></a>
                </div>
            </div>

            <div id="blogArticles">

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
                    
                    <a href="#">
                        <div>
                            <article class="all foodtruck">
                                <img src="images/articles/articleSix.jpg" alt="Food truck" title="Food truck">
                                <p>Le food truck de demain</p>
                            </article>
                        </div>
                    </a>

                </div>
            </div>

            <div id="blogTestimony">

                <div id="blogTestimonyTitle">
                    <h2>Témoignages</h2>
                </div>
                
                <div id="blogTestimonyTestimonials">

                    <div>
                        <div class="blogTestimonyTestimonialsImage">
                            <div>
                                <img src="images/testimonials/testimonyOne.jpg" alt="Témoignage" title="Témoignage">
                            </div>
                            <div>
                                <h3>Vald</h3>
                                <h4>Le 18/05/2017</h4>
                            </div>
                        </div>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquet venenatis mauris sed posuere. Phasellus ut hendrerit mi, eu dignissim ligula. Cras fermentum lacus metus, vel facilisis mauris blandit vitae."</p>
                    </div>
                    
                    <div>
                        <div class="blogTestimonyTestimonialsImage">
                            <div>
                                <img src="images/testimonials/testimonyTwo.jpg" alt="Témoignage" title="Témoignage">
                            </div>
                            <div>
                                <h3>Lorenzo</h3>
                                <h4>Le 18/05/2017</h4>
                            </div>
                        </div>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquet venenatis mauris sed posuere. Phasellus ut hendrerit mi, eu dignissim ligula. Cras fermentum lacus metus, vel facilisis mauris blandit vitae."</p>
                    </div>
                    
                    <div>
                        <div class="blogTestimonyTestimonialsImage">
                            <div>
                                <img src="images/testimonials/testimonyThree.jpg" alt="Témoignage" title="Témoignage">
                            </div>
                            <div>
                                <h3>Columbine</h3>
                                <h4>Le 18/05/2017</h4>
                            </div>
                        </div>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquet venenatis mauris sed posuere. Phasellus ut hendrerit mi, eu dignissim ligula. Cras fermentum lacus metus, vel facilisis mauris blandit vitae."</p>
                    </div>

                </div>

            </div>
            
            <div id="blogInformations">
                <h2>Informations pratiques</h2>
                <a href="mailto:ADRESSEGMAIL">Mail : adresse mail</a>
                <a href="tel:0600000000">Téléphone : 06 00 00 00 00</a>
                <a href="#"><svg enable-background="new 0 0 512 512" id="Layer_1" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M256.108,3.02c-139.743,0-253,113.257-253,253s113.257,252.995,253,252.995   c139.743,0,253-113.252,253-252.995S395.852,3.02,256.108,3.02z M256.108,488.775c-128.338,0-232.76-104.417-232.76-232.755   c0-128.339,104.422-232.76,232.76-232.76c128.338,0,232.76,104.421,232.76,232.76C488.868,384.358,384.446,488.775,256.108,488.775   z"/><polygon points="266.228,104.22 245.988,104.22 245.988,245.9 104.98,245.9 104.98,266.14 245.988,266.14    245.988,407.148 266.228,407.148 266.228,266.14 407.908,266.14 407.908,245.9 266.228,245.9  "/></g></svg></a>
                <a href="#">Plus d'informations</a>
            </div>
        
        </div>  
        
        <?php include "footer.php"; ?>
        
    </body>

</html>
