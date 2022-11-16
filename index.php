<?php require_once("includes/initialisation_ressources.inc.php"); ?>
<?php require_once("includes/header.inc.php"); ?>

<!--CONTENU PRINCIPAL-->

    <div class="titre_about_div">
        <p class="titre_about">ABOUT THIS SITE</p>
    </div>

    <div class="texte_about">
        <p>Cooking With Xiangling is a website to present the list : of ingredients and recipes, 
            present in Genshin Impact and stocked in a Database. The cook in the spotlight is as you might expect Xiangling.
        </p>
    </div>

    <div class="presentation">

        <div class="image_presentation">
            <img class="img_col" src="images/perso/Character_Xiangling_Full_Wish_11zon.png" alt="">
        </div>

        <div class="texte_presentation">
            
            <div class="titre_perso">
                <p>Mao Xiangling</p>
            </div>

            <div class="texte_perso">
                <p>She is the Head Chef at the Wanmin Restaurant and runs it alongside her father 
                    Chef Mao. As a chef, Xiangling isn't afraid to try out different recipes or "exotic" 
                    ingredients, making her dishes sometimes quite unique.
                </p>
            </div>

        </div>

    </div>

    <div class="titre_fav_all">
        <p class="titre_fav" style="margin-top: 20px;">Favorites Ingredient / Recipe</p>
    </div>

    <div class="favorite_all">
        <?php 
        
        //--------------------------------- TRAITEMENTS PHP ---------------------------------//
        $resultat_1 = executeRequete("SELECT id_recipe, name, categorie, description, ingrdients, image_link, price, rate FROM recipes_data WHERE rate = (SELECT MAX(rate) FROM recipes_data)");
        $resultat_2 = executeRequete("SELECT id, name, type, description, image_links, rate FROM ingredients_data WHERE rate = (SELECT MAX(rate) FROM ingredients_data)");

        $fav_ingredient = $resultat_2->fetch_assoc();
        $fav_recipe = $resultat_1->fetch_assoc();

        $contenu .= '<div class="favorite_1" margin-bottom:20px;>';
            $contenu .= "<img src=\"$fav_ingredient[image_links]\" =\"268\" height=\"268\">";
            $contenu .= '<p class="description_fav">' . $fav_ingredient['name'] .'</p>';
            $contenu .= '<div class="" style="color: #eae9e4;">Like ('. $fav_ingredient['rate'] . ')</div>';
        $contenu .= '</div>';

        $contenu .= '<div class="favorite_2" style="margin-bottom:20px;">';
            $contenu .= "<img src=\"$fav_recipe[image_link]\" =\"268\" height=\"268\">";
            $contenu .= '<p class="description_fav">' . $fav_recipe['name'] .'</p>';
            $contenu .= '<div class="" style="color: #eae9e4;">Like ('. $fav_recipe['rate'] . ')</div>';
        $contenu .= '</div>';

        //--------------------------------- AFFICHAGE HTML ---------------------------------//
        echo $contenu;
        
        ?>

    </div>


<?php require_once("includes/footer.inc.php"); ?>