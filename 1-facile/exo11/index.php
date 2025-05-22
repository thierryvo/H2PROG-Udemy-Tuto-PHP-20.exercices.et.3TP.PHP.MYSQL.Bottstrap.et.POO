<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 11 : Les TABLEAUX  foreach"; //Mettre le nom du titre de la page que vous voulez

// CONTENU: exo 11
// ----------------------------------------------------------------------------------------------------------- BACK
// variables
$hommes = ["Matthieu","Pierre","Marc","Jean"];


// ---------------------------------------------------------------------------------------------------------- FRONT
?>

<!-- Mettre ici le code -->
<?php
echo "<h3>TABLEAUX</h3><br/><br/>";
echo '<div class="contenu-d-affichage">';
    // Parcourir le tableau pour l'afficheir
    for($ii=0; $ii < count($hommes); $ii++){
        echo "$ii: $hommes[$ii] <br/>";
    }

    // Remplir un tableau de femme un par un
    $femmes = [];
    $femmes[] = "Morgane";
    $femmes[] = "Mathilde";
    $femmes[] = "Julie";
    echo "<br/><br/>";

    // Parcourir le tableau pour l'afficher - avec: foreach
    $ii=-1;
    foreach($femmes as $item){
        $ii++;
        echo "$ii: $item <br/>";
    }
    echo "<br/><br/>";

    // Parcourir le tableau pour l'afficher - avec: foreach key value
    foreach ($femmes as $key => $value) {
        echo "$key: $value <br/>";
    }  
echo '</div>';
?>


<?php
/***********************************************************************
 * NE PAS MODIFIER: PERMET d INCLURE LE MENU ET LE TEMPLATE
 ***********************************************************************/
// VIDER le buffer pour: Mettre le contenu $content dedans : le template
$content = ob_get_clean();
require "../../global/common/template.php";
?>