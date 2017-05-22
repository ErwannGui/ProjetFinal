<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8" />
        <title>Nos menus</title>
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
       
        <?php $page = 1;
        include "headerFront.php"; ?>

        <div id="container">

            <div id="menuBackground">

                <div id="menuBackgroundImage"></div>
                <div class="backgroundTitle">
                    <h1>NOS MENUS</h1>
                </div>
                <div class="backgroundArrow">
                    <a href="#menuSetMenu"><svg enable-background="new 0 0 26 26" id="Layer_1" version="1.1" viewBox="0 0 26 26" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><polygon points="0.046,2.582 2.13,0.498 12.967,11.334 23.803,0.498 25.887,2.582 12.967,15.502  "/><polygon points="0.046,13.582 2.13,11.498 12.967,22.334 23.803,11.498 25.887,13.582 12.967,26.502"/></g></svg></a>
                </div>
                
            </div>
            
            <div id="menuSetMenu">
                
                <div id="menuSetMenuTitle">
                    <h2>Nos formules</h2>
                </div>
                
                <div id="menuSetMenuContainer">
                    
                    <div id="menuSetMenuContainerOne">
                        <div id="menuSetMenuContainerOneTop">
                            <p><strong>Formule 1 : 6€</strong></p>
                            <p>Plat + boisson</p>
                        </div>
                        <div id="menuSetMenuContainerOneBottom">
                            <p>Disponibilité : midi et soir</p>
                            <p><span>Plat :</span></p>
                            <p>rougail saucisse - carry poulet</p>
                            <p><span>Boisson :</span></p>
                            <p>eau minérale/gazeuse - sodas - bière - vin de Loire</p>
                        </div>
                    </div>
                    <div id="menuSetMenuContainerTwo">
                        <div id="menuSetMenuContainerTwoTop">
                            <p><strong>Formule 2 : 8 ou 10€</strong></p>
                            <p>Plat + entrée ou dessert + boisson (L ou XL)</p>
                        </div>
                        <div id="menuSetMenuContainerTwoBottom">
                            <p>Disponibilité : midi et soir</p>
                            <p><span>Entrée :</span></p>
                            <p>samossa et bonbons piment</p>
                            <p><span>Plat :</span></p>
                            <p>rougail saucisse - carry poulet</p>
                            <p><span>Dessert :</span></p>
                            <p>pâtisserie - fruits créole (litchi et mangue)</p>
                            <p>Boisson : eau minérale/gazeuse - sodas - bière - vin de Loire</p>
                        </div>
                    </div>
                    <div id="menuSetMenuContainerThree">
                        <div id="menuSetMenuContainerThreeTop">
                            <p><strong>Formule 3 : 12 ou 15€</strong></p>
                            <p>Entrée + plat + dessert + boisson (L ou XL)</p>
                        </div>
                        <div id="menuSetMenuContainerThreeBottom">
                            <p>Disponibilité : soir</p>
                            <p><span>Entrée :</span></p>
                            <p>samossa et bonbons piment</p>
                            <p><span>Plat :</span></p>
                            <p>rougail saucisse - carry poulet</p>
                            <p><span>Dessert :</span></p>
                            <p>pâtisserie - fruits créole (litchi et mangue)</p>
                            <p><span>Boisson :</span></p>
                            <p>eau minérale/gazeuse - sodas - bière - vin de Loire</p>
                        </div>
                    </div>
                    
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
                        <tr>
                            <td>Samossa</td>
                            <td class="menuBoardBoardTD">1€</td>
                            <td class="menuBoardBoardTD">1.50€</td>
                        </tr>
                        <tr>
                            <td>Bonbons</td>
                            <td class="menuBoardBoardTD">1€</td>
                            <td class="menuBoardBoardTD">1,50€</td>
                        </tr>
                        <tr>
                            <td>Rougail</td>
                            <td class="menuBoardBoardTD">7€</td>
                            <td class="menuBoardBoardTD">9€</td>
                        </tr>
                        <tr>
                            <td>Carry</td>
                            <td class="menuBoardBoardTD">7€</td>
                            <td class="menuBoardBoardTD">9€</td>
                        </tr>
                        <tr>
                            <td>Bouchon gratiné</td>
                            <td class="menuBoardBoardTD" class="menuBoardBoardTD">5€</td>
                            <td class="menuBoardBoardTD" class="menuBoardBoardTD">X</td>
                        </tr>
                        <tr>
                            <td>Coupelle de fruits</td>
                            <td class="menuBoardBoardTD" class="menuBoardBoardTD">2,50€</td>
                            <td class="menuBoardBoardTD" class="menuBoardBoardTD">X</td>
                        </tr>
                        <tr>
                            <td>Pâtisserie</td>
                            <td class="menuBoardBoardTD" class="menuBoardBoardTD">3€</td>
                            <td class="menuBoardBoardTD" class="menuBoardBoardTD">X</td>
                        </tr>
                        <tr>
                            <td>Eau</td>
                            <td class="menuBoardBoardTD" class="menuBoardBoardTD">1,10€</td>
                            <td class="menuBoardBoardTD" class="menuBoardBoardTD">1,50€</td>
                        </tr>
                        <tr>
                            <td>Soda</td>
                            <td class="menuBoardBoardTD">1,30</td>
                            <td class="menuBoardBoardTD">1,90€</td>
                        </tr>
                        <tr>
                            <td>Bière dodo</td>
                            <td class="menuBoardBoardTD">3,50</td>
                            <td class="menuBoardBoardTD">X</td>
                        </tr>
                        <tr>
                            <td>Vin de Loire</td>
                            <td class="menuBoardBoardTD">5€</td>
                            <td class="menuBoardBoardTD">10€</td>
                        </tr>
                    </table>
                </div>
                
            </div>
            
            <?php include "infos_comp.php"; ?>
        
        </div>
        
        <?php include "footer.php"; ?>
        
    </body>
    
</html>