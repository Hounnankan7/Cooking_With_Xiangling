<?php 

require_once("includes/initialisation_ressources.inc.php");

//--------------------------------- TRAITEMENTS PHP ---------------------------------//
//--- AFFICHAGE DES CATEGORIES ---//
$contenu .= '<div class="titre_ingredient_div">';
$contenu .= '<p class="titre_ingredient">';
$contenu .= 'INGREDIENTS';
$contenu .= "</p>";
$contenu .= "</div>";

$categories_ingredients = executeRequete("SELECT DISTINCT type FROM ingredients_data");
$contenu .= '<ul class="categories_ingredient">';
while($cat = $categories_ingredients->fetch_assoc()){
    $contenu .= "<li><a href='?type=" . $cat['type'] . "'>" . $cat['type'] . "</a></li>";
}
$contenu .= "</ul>";

//--- AFFICHAGE DES PRODUITS ---//
$contenu .= '<div class="ingredient_all">';
if(isset($_GET['type'])){
    $donnees = executeRequete("SELECT id, name, type, description, image_links, rate from ingredients_data where type='$_GET[type]'");
    while ($ingredient = $donnees->fetch_assoc()) {
        $contenu .= '<div class="ingredient_affichage">';
        $contenu .= "<a href=\"one_ingredient_page.php?id=$ingredient[id]\"><img src=\"$ingredient[image_links]\" =\"268\" height=\"268\"></a>";
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