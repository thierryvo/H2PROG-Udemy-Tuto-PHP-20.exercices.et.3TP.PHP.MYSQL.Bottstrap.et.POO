<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 8 : BOUCLE WHILE + random"; //Mettre le nom du titre de la page que vous voulez

// CONTENU: exo 8
// ----------------------------------------------------------------------------------------------------------- BACK
// Générer un chiffre aléatoire: random entre 1 & 20
$unRandom = rand(1,20);

// ---------------------------------------------------------------------------------------------------------- FRONT
?>

<!-- Mettre ici le code -->
<?php
echo "<h3>BOUCLE WHILE - répéter TANT QUE le random n'est pas  > à 15</h3><br/><br/>";

$ii = 0;
while ($unRandom <= 15) {    
    // tant que c'est <= 15 on continue à choisir un autre random
    // ko: un autre random
    $ii++;
    echo "Essaie No $ii : $unRandom est trop petit <br/>";
    $unRandom = rand(1,20);
}//FIN Boucle

// ok: fin de la boucle -- c'est le bon
echo "LE chiffre choisi est le: $unRandom <br/>";
?>


<?php
/***********************************************************************
 * NE PAS MODIFIER: PERMET d INCLURE LE MENU ET LE TEMPLATE
 ***********************************************************************/
// VIDER le buffer pour: Mettre le contenu $content dedans : le template
$content = ob_get_clean();
require "../../global/common/template.php";
?>