<?php 

require_once("includes/initialisation_ressources.inc.php");

//--------------------------------- TRAITEMENTS PHP ---------------------------------//
if(isset($_GET['id'])){
    $resultat = executeRequete("SELECT * FROM recipes_data WHERE id_recipe = '$_GET[id]'");
}
if($resultat->num_rows <= 0){
    header("location:all_recipes_page.php");
    exit();
}

$recipe = $resultat->fetch_assoc();
$contenu .= '<div class="like_div" style="margin-left: 134px;color: #eae9e4;">Like ('. $recipe['rate'] . ')</div>';
$contenu .= '<div class="grande_div" style="display: flex; width: 732px; margin: 0 auto; margin-top:20px; margin-bottom:20px;">';
    $contenu .= '<div class="info_img">';
        $contenu .= "<img style='margin-bottom:20px; background-color: #eae9e4;border: 5px solid #20af94; border-radius: 15px; padding: 5px;' src='$recipe[image_link]' ='268' height='268'>";
    $contenu .= "</div>";
    $contenu .= '<div class="info_div" style="margin-left:30px;color: #eae9e4;">';
        $contenu .= '<p class="p_name" style="background-color: #20af94; font-size: 40px; margin:0px;">' . $recipe['name'] . '</p>';

        $contenu .= '<p class="p_description" style="font-size: 16px;">' . $recipe['description'] . '</p>';

        $contenu .= '<p class="p_ingredient_titre" style="background-color: #20af94; font-size: 40px; margin:0px;">Ingredients</p>';

        $contenu .= '<p class="p_ingredient" style="font-size: 16px;">' . $recipe['ingrdients'] . '</p>';

    $contenu .= "</div>";
$contenu .= "</div>";

//--------------------------------- AFFICHAGE HTML ---------------------------------//
require_once("includes/header.inc.php");
echo $contenu;
require_once("includes/footer.inc.php");
?>