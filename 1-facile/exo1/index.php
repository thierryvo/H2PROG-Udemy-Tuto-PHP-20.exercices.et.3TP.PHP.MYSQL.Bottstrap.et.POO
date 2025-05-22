<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 1 : Variables"; //Mettre le nom du titre de la page que vous voulez

// CONTENU: exo 1
// ----------------------------------------------------------------------------------------------------------- BACK
$a = 3;
$b = 5;
$c = 7;
// ---------------------------------------------------------------------------------------------------------- FRONT
?>
<!-- Mettre ici le code -->
 <?php 
echo '<p>';
    echo "************** AVANT PERMUTATION **************<br />";
    echo "A:".(string)$a.'<br />';
    echo "B:".(string)$b.'<br />';
    echo "C:".(string)$c.'<br /><br />';
echo '</p>';

// Faire la permutation
$aux = $a;
$a   = $b;
$b   = $c;
$c   = $aux;
echo '<p>';
    echo "************** APRES PERMUTATION **************<br />";
    echo "A:".(string)$a.'<br />';
    echo "B:".(string)$b.'<br />';
    echo "C:".(string)$c.'<br /><br />';
echo '</p>';
 ?>


<?php
/***********************************************************************
 * NE PAS MODIFIER: PERMET d INCLURE LE MENU ET LE TEMPLATE
 ***********************************************************************/
// VIDER le buffer pour: Mettre le contenu $content dedans : le template
$content = ob_get_clean();
require "../../global/common/template.php";
?>
