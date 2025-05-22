<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 3 : Les tests - Nombre aléatoire et test if"; //Mettre le nom du titre de la page que vous voulez

// CONTENU: exo 3
// ----------------------------------------------------------------------------------------------------------- BACK
// Générer un chiffre aléatoire: random entre 1 & 20
$unRandom = rand(1,20);

// ---------------------------------------------------------------------------------------------------------- FRONT
?>

<!-- Mettre ici le code -->
<?php
echo "<h2>LE nombre random aléatoire est: $unRandom</h2><br/><br/>";
if($unRandom <= 5){
    echo "Il est compris entre 1 et 5.";
}else if($unRandom <= 10){
    echo "Il est compris entre 6 et 10.";
}else if($unRandom <= 15){
    echo "Il est compris entre 11 et 15.";
}else{
    echo "Il est compris entre 16 et 20.";
}
?>



<?php
/***********************************************************************
 * NE PAS MODIFIER: PERMET d INCLURE LE MENU ET LE TEMPLATE
 ***********************************************************************/
// VIDER le buffer pour: Mettre le contenu $content dedans : le template
$content = ob_get_clean();
require "../../global/common/template.php";
?>