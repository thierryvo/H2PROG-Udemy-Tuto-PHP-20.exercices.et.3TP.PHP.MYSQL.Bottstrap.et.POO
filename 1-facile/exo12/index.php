<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 12 : TABLEAUX et Moyenne"; //Mettre le nom du titre de la page que vous voulez

// CONTENU: exo 12
// ----------------------------------------------------------------------------------------------------------- BACK
// variables
$notesMarc = [12,15,13,7,18];
$notesMatthieu = [11,14,10,4,20,8,2];

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
    echo "<br/><br/>";

    // PARCOURS du tableau: des notes de Marc --------------------------
    $resultat = 0;
    for($ii=0; $ii < count($notesMarc); $ii++){
        // Cumul: $resultat = $resultat + $notesMarc[$ii]
        $resultat += $notesMarc[$ii];        
    }
    $laMoyenne = $resultat / count($notesMarc);
    echo "La moyenne des notes de <b>Marc</b> est de: <b>$laMoyenne</b> <br />";


    // PARCOURS du tableau: des notes de Matthieu ----------------------
    $resultat = 0;
    foreach($notesMatthieu as $item){
        // Cumul: $resultat = $resultat + $notesMatthieu[$ii]
        $resultat += $item;        
    }
    $laMoyenne = $resultat / count($notesMatthieu);
    echo "La moyenne des notes de <b>Matthieu</b> est de: <b>$laMoyenne</b>";    
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