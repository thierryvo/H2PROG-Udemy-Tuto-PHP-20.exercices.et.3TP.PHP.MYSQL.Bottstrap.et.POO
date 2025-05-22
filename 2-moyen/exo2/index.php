<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : FICHIER de Fonctions & TABLEAU"; //Mettre le nom du titre de la page que vous voulez

// CONTENU: exo 2
// ----------------------------------------------------------------------------------------------------------- BACK
// variables tableau
require "fonctions.php";
$tab1 = [2,3,6,10,20,9,14];
$tab2 = [2,6,8,10,12,14,16,18,20];


// ---------------------------------------------------------------------------------------------------------- FRONT
?>

<!-- Mettre ici le code html -->
<div class="contenu-d-affichage">
    <div class="row test-center uneligne">
        <div class="col">
            <h2>Tableau 1</h2>
            <?php
            afficherTableau($tab1);  echo '<br/>';
            echo "La moyenne est de : " . calculerMoyenne($tab1) . "<br/>";
            if(estTableauPair($tab1)){
                echo "Le tableau contient que des valeur pair.<br/>";
            }else{
                echo "Le tableau contient au moins une valeur impair.<br/>";
            }            
            ?>
        </div>
        <div class="col">
            <h2>Tableau 2</h2>
            <?php
            afficherTableau($tab2); echo '<br/>';
            echo "La moyenne est de : " . calculerMoyenne($tab1) . "<br/>";
            if(estTableauPair($tab2)){
                echo "Le tableau contient que des valeur pair.<br/>";
            }else{
                echo "Le tableau contient au moins une valeur impair.<br/>";
            }            
            ?>
        </div>
    </div>
</div>


<?php
/***********************************************************************
 * NE PAS MODIFIER: PERMET d INCLURE LE MENU ET LE TEMPLATE
 ***********************************************************************/
// VIDER le buffer pour: Mettre le contenu $content dedans : le template
$content = ob_get_clean();
require "../../global/common/template.php";
?>