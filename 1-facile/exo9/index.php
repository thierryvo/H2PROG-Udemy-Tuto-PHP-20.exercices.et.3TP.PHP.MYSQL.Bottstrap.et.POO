<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 9 : Les FONCTIONS - isPair  Pair ou Impair"; //Mettre le nom du titre de la page que vous voulez

// CONTENU: exo 9
// ----------------------------------------------------------------------------------------------------------- BACK
// variables
$a = 5;
$b = 122;


/* ===================================================================== */
/*                            LES FONCTION                               */
/* ===================================================================== */
// isPair
function isPair($nombre){
    // SI le MODULO 2 d'un nombre est égale à zéro: c'est que c'est PAIR
    // le    modulo   en fait c'est le:  reste de nombre / 2
    $moduloDeux = $nombre % 2; // % c'est le modulo 
    if($moduloDeux == 0){
        // C'est PAIR
        return true;
    }else{
        // C'est IMPAIR
        return false;
    }
}

// ---------------------------------------------------------------------------------------------------------- FRONT
?>

<!-- Mettre ici le code -->
<?php
echo "<h3>DETERMINER SI un Nombre est PAIR ou IMPAIR grace au  MODULO 2  ( % 2 )</h3><br/><br/>";

echo '<div class="contenu-d-affichage">';
    echo "Le nombre $a";
    echo isPair($a)?" est pair":" n'est pas pair";

    echo "<br/><br/>";
    echo "Le nombre $b";
    echo isPair($b)?" est pair":" n'est pas pair";
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