<?php 

require_once("includes/initialisation_ressources.inc.php");

//--------------------------------- TRAITEMENTS PHP ---------------------------------//
//--- AFFICHAGE DES CATEGORIES ---//
$contenu .= '<div class="titre_ingredient_div">';
$contenu .= '<p class="titre_ingredient">';
$contenu .= 'RECIPES';
$contenu .= "</p>";
$contenu .= "</div>";

$categories_ingredients = executeRequete("SELECT DISTINCT categorie FROM recipes_data");
$contenu .= '<ul class="categories_ingredient">';
while($cat = $categories_ingredients->fetch_assoc()){
    $contenu .= "<li><a href='?categorie=" . $cat['categorie'] . "'>" . $cat['categorie'] . "</a></li>";
}
$contenu .= "</ul>";

//--- AFFICHAGE DES PRODUITS ---//
$contenu .= '<div class="ingredient_all">';
if(isset($_GET['categorie'])){
    $donnees = executeRequete("SELECT id_recipe, name, categorie, description, ingrdients, image_link, price, rate from recipes_data where categorie='$_GET[categorie]'");
    while ($ingredient = $donnees->fetch_assoc()) {
        $contenu .= '<div class="ingredient_affichage">';
        $contenu .= "<a href=\"one_recipe_page.php?id=$ingredient[id_recipe]\"><img src=\"$ingredient[image_link]\" =\"268\" height=\"268\"></a>";
        $contenu .= '<p class="name_ingredient">' . $ingredient['name'] .'</p>';
        $contenu .= '</div>';
    }
}
$contenu .= '</div>';

//--------------------------------- AFFICHAGE HTML ---------------------------------//
require_once("includes/header.inc.php");
echo $contenu;
require_once("includes/footer.inc.php");
?>