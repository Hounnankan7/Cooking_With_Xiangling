
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cooking With Xiangling</title>
		<link rel="stylesheet" href="css/stylesheet.css">
        <link rel="icon" type="image/x-icon" href="images/perso/favicon.png">
		
		<!-- - - - - - - - - - - - Liens FONTS UTILISéS - - - - - - - - - - - - -->

		<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

		<!-- - - - - - - - - - - - Liens FONTS UTILISéS - - - - - - - - - - - - -->
	</head>

    <body>

        <div>
        <?php 
    try {
        // Souvent on identifie cet objet par la variable $conn ou $db
        $mysqlConnection = new PDO('mysql:host=localhost:3307;dbname=genshinkitchen_db;charset=utf8','root','root');
        $mysqlConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //Lancement de la recherche dans la table
        $recherche = $mysqlConnection->prepare('SELECT name, type, description, image_links, rate FROM `ingredients_data`');
        $recherche->execute();

        $resultat = $recherche->fetchAll(PDO::FETCH_ASSOC);

        $resultat_afficher = array($resultat[0], $resultat[1], $resultat[2], $resultat[3], $resultat[4], $resultat[5], $resultat[6], $resultat[7], $resultat[8]);
                /*echo '<pre>';
                print_r($resultat);
                echo '</pre>';*/

                if ($_POST['page'] == '1') {
                    $resultat_afficher = array($resultat[0], $resultat[1], $resultat[2], $resultat[3], $resultat[4], $resultat[5], $resultat[6], $resultat[7], $resultat[8]);
                }
                elseif ($_POST['page'] == '2') {
                    $resultat_afficher = array($resultat[9], $resultat[10], $resultat[11], $resultat[12], $resultat[13], $resultat[14], $resultat[15], $resultat[16], $resultat[17]);
                }
                elseif ($_POST['page'] == '3') {
                    $resultat_afficher = array($resultat[18], $resultat[19], $resultat[20], $resultat[21], $resultat[22], $resultat[23], $resultat[24], $resultat[25], $resultat[26]);               
                }
                elseif ($_POST['page'] == '4') {
                    $resultat_afficher = array($resultat[27], $resultat[28], $resultat[29], $resultat[30], $resultat[31], $resultat[32], $resultat[33], $resultat[34], $resultat[35]);
                }
                elseif ($_POST['page'] == '5') {
                    $resultat_afficher = array($resultat[36], $resultat[37], $resultat[38], $resultat[39], $resultat[40], $resultat[41], $resultat[42], $resultat[43], $resultat[44]);                
                }
                elseif ($_POST['page'] == '6') {
                    $resultat_afficher = array($resultat[45], $resultat[46], $resultat[47], $resultat[48], $resultat[49], $resultat[50], $resultat[51], $resultat[52], $resultat[53]);
                }
                elseif ($_POST['page'] == '7') {
                    $resultat_afficher = array($resultat[54], $resultat[55], $resultat[56], $resultat[57], $resultat[58], $resultat[59], $resultat[60], $resultat[61], $resultat[62]);
                }
                elseif ($_POST['page'] == '8') {
                    $resultat_afficher = array($resultat[63], $resultat[64], $resultat[65], $resultat[66], $resultat[67], $resultat[68], $resultat[69], $resultat[70], $resultat[71]);
                }
                elseif ($_POST['page'] == '9') {
                    $resultat_afficher = array($resultat[72], $resultat[73], $resultat[74], $resultat[75], $resultat[76], $resultat[77], $resultat[78], $resultat[79], $resultat[80]);
                }

    }
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
    }
?>
        </div>
    
        <!--MENU PRINCIPAL-->
        <div class="menu_principal">
            
            <div class="title_div">
                <h1 class="title">C W X <span class="style_point">.</span></h1>
            </div>

            <div class="menu_div">
                <nav class="menu">
                    <ul>
                        <li><a href="index.php">ABOUT</a></li>
                        <li><a href="ingredients.php">INGREDIENTS</a></li>
                        <li><a href="recipes.php">RECIPES</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <!--CONTENU PRINCIPAL-->
        <div class="about">
            
            <div class="titre_fav_all">
                <p class="titre_fav">INGREDIENTS</p>
            </div>

            <ul class="ingredient_all">
                <li class="ingredient_1">
                    <img class="img_ingredient" src='<?=$resultat_afficher[0]['image_links']?>' alt="">
                    <p class="description_ingredient"><?php echo $resultat_afficher[0]['name'] ?></p>
                </li>

                <li class="ingredient_1">
                    <img class="img_ingredient" src='<?=$resultat_afficher[1]['image_links']?>' alt="">
                    <p class="description_ingredient"><?php echo $resultat_afficher[1]['name'] ?></p>
                </li>

                <li class="ingredient_1">
                    <img class="img_ingredient" src='<?=$resultat_afficher[2]['image_links']?>' alt="">
                    <p class="description_ingredient"><?php echo $resultat_afficher[2]['name'] ?></p>
                </li>

                <li class="ingredient_1">
                    <img class="img_ingredient" src='<?=$resultat_afficher[3]['image_links']?>' alt="">
                    <p class="description_ingredient"><?php echo $resultat_afficher[3]['name'] ?></p>
                </li>

                <li class="ingredient_1">
                    <img class="img_ingredient" src='<?=$resultat_afficher[4]['image_links']?>' alt="">
                    <p class="description_ingredient"><?php echo $resultat_afficher[4]['name'] ?></p>
                </li>

                <li class="ingredient_1">
                    <img class="img_ingredient" src='<?=$resultat_afficher[5]['image_links']?>' alt="">
                    <p class="description_ingredient"><?php echo $resultat_afficher[5]['name'] ?></p>
                </li>

                <li class="ingredient_1">
                    <img class="img_ingredient" src='<?=$resultat_afficher[6]['image_links']?>' alt="">
                    <p class="description_ingredient"><?php echo $resultat_afficher[6]['name'] ?></p>
                </li>

                <li class="ingredient_1">
                    <img class="img_ingredient" src='<?=$resultat_afficher[7]['image_links']?>' alt="">
                    <p class="description_ingredient"><?php echo $resultat_afficher[7]['name'] ?></p>
                </li>

                <li class="ingredient_1">
                    <img class="img_ingredient" src='<?=$resultat_afficher[8]['image_links']?>' alt="">
                    <p class="description_ingredient"><?php echo $resultat_afficher[8]['name'] ?></p>
                </li>
                
            </ul>

            <form method="post" action="page.php" style="margin: auto; width: 300px;display:flex;padding-left:20px; font-size:large;">
                <div class="formulaire_all">
                    <p style="">
                        <input list="page" name="page">
                        <datalist id="page">
                            <option value="1">
                            <option value="2">
                            <option value="3">
                            <option value="4">
                            <option value="5">
                            <option value="6">
                            <option value="7">
                            <option value="8">
                            <option value="9">
                        </datalist>
                    </p>
                </div>
                <p><input type="submit" value="Go to page" /></p>
            </form>

        </div>

        <!--FOOTER-->
        <div class="menu_footer" style="text-align: center;">
            <ul class="social_links">
                <li><a href="https://github.com/Hounnankan7" target="_blank"><img class="img_icon" src="icons/github_icon.png" alt=""></a></li>
                <li style="padding-left: 50px;"><a href="https://www.linkedin.com/in/prince-donald-hounnankan-909566177/" target="_blank"><img class="img_icon" src="icons/linkedin_icon.png" alt=""></a></li>
            </ul>
            <p style="margin: 0px;font-size: 20px;color: #20af94;">2022 Copyright - Tous droits réservés</p>
        </div>

	</body>

</html>