<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 13 : TABLEAUX et Fonction Moyenne"; //Mettre le nom du titre de la page que vous voulez

// CONTENU: exo 13
// ----------------------------------------------------------------------------------------------------------- BACK
// variables
$notesMarc = [12,15,13,7,18];
$notesMatthieu = [11,14,10,4,20,8,2];
$notesPierre = [5,13,9,3];
$notesPaul = []; // une par une
$notesPaul[] = 6;
$notesPaul[] = 11;
$notesPaul[] = 15;
$notesPaul[] = 2;

/* ===================================================================== */
/*                            LES FONCTION                               */
/* ===================================================================== */
// moyenneNotes
function moyenneNotes($tableau){
    //
    // PARCOURS du tableau: des notes -----------------------
    $resultat = 0;
    foreach($tableau as $item){
        // Cumul: $resultat = $resultat + $item
        $resultat += $item;        
    }
    $laMoyenne = $resultat / count($tableau);
    return $laMoyenne;
}

// ---------------------------------------------------------------------------------------------------------- FRONT
?>

<!-- Mettre ici le code -->
<?php
echo '<div class="contenu-d-affichage">';
    echo "<h3>TABLEAUX Moyenne des Notes pour chaque personne</h3><br/>";
    echo "Les Notes de Marc:";
    foreach($notesMarc as $item){ echo " $item, "; }
    echo '<br/>';
    echo "Les Notes de Matthieu:";
    foreach($notesMatthieu as $item){ echo " $item, "; }
    echo '<br/>';
    echo "Les Notes de Pierre:";
    foreach($notesPierre as $item){ echo " $item, "; }
    echo '<br/>';
    echo "Les Notes de Paul:";
    foreach($notesPaul as $item){ echo " $item, "; }
    echo "<br/><br/>";

    // Les Mouennes -------------------------------c --------------------------
    $laMoyenne = moyenneNotes($notesMarc);
    echo "La moyenne des notes de <b>Marc</b> est de: <b>$laMoyenne</b> <br />";
    $laMoyenne = moyenneNotes($notesMatthieu);
    echo "La moyenne des notes de <b>Matthieu</b> est de: <b>$laMoyenne</b> <br />";
    $laMoyenne = moyenneNotes($notesPierre);
    echo "La moyenne des notes de <b>Pierre</b> est de: <b>$laMoyenne</b> <br />";
    $laMoyenne = moyenneNotes($notesPaul);
    echo "La moyenne des notes de <b>Paul</b> est de: <b>$laMoyenne</b> <br />";
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