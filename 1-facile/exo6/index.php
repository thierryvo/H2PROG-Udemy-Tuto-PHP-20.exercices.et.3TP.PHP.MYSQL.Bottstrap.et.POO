<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 6 : La boucle for - for & rand - sens inverse "; //Mettre le nom du titre de la page que vous voulez

// CONTENU: exo 6
// ----------------------------------------------------------------------------------------------------------- BACK
// Générer un chiffre aléatoire: random entre 5 & 15
$unRandom = rand(5,15);

// ---------------------------------------------------------------------------------------------------------- FRONT
?>

<!-- Mettre ici le code -->
<?php
echo "<h2>Voici le cumul des <b>$unRandom</b> premiers nombres (sens normal)</h2><br />";
// BOUCLE for de 1 à 10
$resultat = 0;
for ($ii=1; $ii <= $unRandom; $ii++){
    // Additionner à chaque tour de boucle: resultat = resultat + ii
    $resultat += $ii;
  
    echo ".   Etape (indice ii) : $ii - resultat = $resultat <br/>";
}


echo "<br/><br/><br/>";
echo "<h2>Voici le cumul des <b>$unRandom</b> premiers nombres (sens inverse)</h2><br />";
// BOUCLE for de 1 à 10
$resultat = 0;
for ($ii=$unRandom; $ii >=1; $ii--){
    // Additionner à chaque tour de boucle: resultat = resultat + ii
    $resultat += $ii;
  
    echo ".   Etape (indice ii) : $ii - resultat = $resultat <br/>";
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