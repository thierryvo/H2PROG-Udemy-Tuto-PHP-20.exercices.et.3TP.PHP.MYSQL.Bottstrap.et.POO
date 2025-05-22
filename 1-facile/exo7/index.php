<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 7 : switch - FAIRE un choix unique parmis une ssélection "; //Mettre le nom du titre de la page que vous voulez

// CONTENU: exo 7
// ----------------------------------------------------------------------------------------------------------- BACK
// Générer un chiffre aléatoire: random entre 1 & 12
$unRandom = rand(1,12);

// ---------------------------------------------------------------------------------------------------------- FRONT
?>

<!-- Mettre ici le code -->
<?php
echo "<h3>Valeur du random : <b>$unRandom</b>  à transformer en mois</h3><br/><br/>";
$mois = "";
switch($unRandom){
    case 1 : $mois = "Janvier";
        break ;  
    case 2 : $mois =  "Fevrier";
        break ;
    case 3 : $mois = "Mars";
        break ;
    case 4 : $mois = "Avril";
        break ;
    case 5 : $mois = "Mai";
        break ;
    case 6 : $mois = "Juin";
        break ;
    case 7 : $mois = "Juillet";
        break ;
    case 8 : $mois = "Aout";
        break ;
    case 9 : $mois = "Septembre";
        break ;
    case 10 : $mois = "Octobre";
        break ;
    case 11 : $mois = "Novembre";
        break ;
    case 12 : $mois = "Décembre";
        break ;
    default: echo '.';                                   
}

// Affichage   b balise bold pour mettre en gras
echo "Le mois <b>$unRandom</b> en chiffres,  correspond au mois <b>$mois</b> en toute lettres. <br/>";
?>


<?php
/***********************************************************************
 * NE PAS MODIFIER: PERMET d INCLURE LE MENU ET LE TEMPLATE
 ***********************************************************************/
// VIDER le buffer pour: Mettre le contenu $content dedans : le template
$content = ob_get_clean();
require "../../global/common/template.php";
?>