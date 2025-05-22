<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 14 : TABLEAUX et Fonction Moyenne - Multi-dimension tableaux de tableaux"; //Mettre le nom du titre de la page que vous voulez

// CONTENU: exo 14
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
//
// Tableaux de Tableux = Toutes les Notes de tous les élèves
$notesEleves = [$notesMarc, $notesMatthieu, $notesPierre, $notesPaul];

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

    // Les Moyennes ----------------------------------------------------------------
    $laMoyenne = moyenneNotes($notesEleves[0]);
    echo "La moyenne des notes de <b>Marc</b> est de: <b>$laMoyenne</b> <br />";
    $laMoyenne = moyenneNotes($notesEleves[1]);
    echo "La moyenne des notes de <b>Matthieu</b> est de: <b>$laMoyenne</b> <br />";
    $laMoyenne = moyenneNotes($notesEleves[2]);
    echo "La moyenne des notes de <b>Pierre</b> est de: <b>$laMoyenne</b> <br />";
    $laMoyenne = moyenneNotes($notesEleves[3]);
    echo "La moyenne des notes de <b>Paul</b> est de: <b>$laMoyenne</b> <br />";
    echo "<br/><br/>";

    // Les Moyennes en BOUCLE ------------------------------------------------------
    for($ii=0; $ii < count($notesEleves); $ii++){
        $laMoyenne = moyenneNotes($notesEleves[$ii]);
        echo "La moyenne des notes du <b>$ii ème</b> élément est de: <b>$laMoyenne</b> <br />";
    }
    echo "<br/><br/>";

    // Les Moyennes en BOUCLE ------------------------------------------------------
    // avec foreach key valeur
    foreach ($notesEleves as $key => $value) {
        # code...
        $laMoyenne = moyenneNotes($value);
        echo "La moyenne des notes du <b>$key ème</b> élément est de: <b>$laMoyenne</b> <br />";        
    }
    echo "<br/><br/>";
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