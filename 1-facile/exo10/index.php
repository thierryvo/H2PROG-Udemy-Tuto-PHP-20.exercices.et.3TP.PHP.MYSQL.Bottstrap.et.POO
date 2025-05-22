<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 10 : Les FONCTIONS - str_replace,   mb_strlen, mb_str_split, implode,  SupprimerLesVoyelles"; //Mettre le nom du titre de la page que vous voulez

// CONTENU: exo 10
// ----------------------------------------------------------------------------------------------------------- BACK
// variables
$monMot = "Eléphant";


/* ===================================================================== */
/*                            LES FONCTION                               */
/* ===================================================================== */
// supprimerLesVoyelles
function supprimerLesVoyelles($mot){
    // "aeiouy"
    $lesVoyelles = "_aeiouyAEIOUYàéîôùèïöü";
    $tailleDuMot = mb_strlen($mot);
    $tabCar = mb_str_split($mot);
    $buffer = "";
    //
    // Parcours de chaque caractère 
    for ($ii=0; $ii < $tailleDuMot; $ii++ ) { 
        //
        // Recherche si unCar est dans les voyelles
        $unCar = $tabCar[$ii];
        $pos=-1;
        $pos = mb_strpos($lesVoyelles, $unCar, 0);      
        if(!$pos){
            // $pos = false = NON Trouvé on prend
            $buffer = (string)$buffer . (string)$unCar;
        }
    }
    //
    return $buffer;
}
function supprimerLesVoyelles2($mot){
    // SI le MODULO 2 d'un nombre est égale à zéro: c'est que c'est PAIR
    $lesVoyelles = ["a","e","i","o","u","y","A","E","I","O","U","Y","à","é","î","ô","ù","è","ï","ö","ü"];

    $laRecherche = $lesVoyelles;
    $remplacerPar = ""; // Remplace chaque caractère par le vide
    $mot_a_modifier = $mot; // le mot sur lequel on souhate faire les modifications
    $resultat = str_replace($laRecherche, $remplacerPar, $mot_a_modifier);
    //
    return $resultat;
}

// ---------------------------------------------------------------------------------------------------------- FRONT
?>

<!-- Mettre ici le code -->
<?php
echo "<h3>SUPPRIMER les Voyelles d'un mot</h3><br/><br/>";

echo '<div class="contenu-d-affichage">';
    echo "Le mot de départ, monMot : $monMot <br/><br/>";

    $motDeFin = supprimerLesVoyelles($monMot);
    echo "Le mot avec les voyelles supprimées = $motDeFin <br/>";

    $motDeFin2 = supprimerLesVoyelles2($monMot);
    echo "Le mot avec les voyelles supprimées = $motDeFin2 <br/>";
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