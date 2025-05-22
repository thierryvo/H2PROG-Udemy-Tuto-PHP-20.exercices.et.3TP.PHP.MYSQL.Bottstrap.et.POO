<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 5 : La boucle for - for & rand - table de MULTIPLICATION "; //Mettre le nom du titre de la page que vous voulez

// CONTENU: exo 5
// ----------------------------------------------------------------------------------------------------------- BACK
// Générer un chiffre aléatoire: random entre 1 & 100
$unRandom = rand(1,9);

// ---------------------------------------------------------------------------------------------------------- FRONT
?>

<!-- Mettre ici le code -->
<?php
echo "<h2>Voici la table de multiplication du chiffre : <b> $unRandom</b></h2><br />";

// BOUCLE for de 1 à 10
for ($ii=1; $ii <= 10; $ii++){
    $resultat = $unRandom * $ii;
    echo "   $unRandom * $ii  = $resultat <br/>";
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