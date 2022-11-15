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
        $page_to_open = "1";
                echo '<pre>';
                print_r($resultat);
                echo '</pre>';

                if ($_POST['page'] == '1') {
                    $page_to_open = '1';
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
                    $page_to_open = "9";
                    $resultat_afficher = array($resultat[72], $resultat[73], $resultat[74], $resultat[12], $resultat[13], $resultat[14], $resultat[15], $resultat[16], $resultat[17]);
                }

    }
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
    }
?>