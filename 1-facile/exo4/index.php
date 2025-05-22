<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : Les tests - Nombre aléatoire rand, valeur absolue abs et test if"; //Mettre le nom du titre de la page que vous voulez

// CONTENU: exo 4
// ----------------------------------------------------------------------------------------------------------- BACK
// Générer un chiffre aléatoire: random entre 1 & 100
$unRandom = rand(1,100);
$deuxRandom = rand(1,100);

// ---------------------------------------------------------------------------------------------------------- FRONT
?>

<!-- Mettre ici le code -->
<?php
echo "Nombre aléatoire 1 : <b> $unRandom</b><br />";
echo "Nombre aléatoire 2 : <b> $deuxRandom</b><br />";

// Valeur Absolue abs
$resultat = abs($unRandom - $deuxRandom);
if($resultat > 25 && $resultat < 75){
    echo "La valeur absolue de <b>$unRandom - $deuxRandom</b> est comprise entre 25 et 75.";
}else{
    echo "La valeur absolue de <b>$unRandom - $deuxRandom</b> n'est pas comprise entre 25 et 75.";
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