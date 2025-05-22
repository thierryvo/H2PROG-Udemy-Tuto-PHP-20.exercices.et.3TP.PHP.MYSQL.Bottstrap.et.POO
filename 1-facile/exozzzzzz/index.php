<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 1 : Variables"; //Mettre le nom du titre de la page que vous voulez

// CONTENU
?>

<!-- mettre ici le code -->



<?php
/***********************************************************************
 * NE PAS MODIFIER: PERMET d INCLURE LE MENU ET LE TEMPLATE
 ***********************************************************************/
// VIDER le buffer pour: Mettre le contenu $content dedans : le template
$content = ob_get_clean();
require "../../global/common/template.php";
?>
