<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 15 : TABLEAUX associatifs"; //Mettre le nom du titre de la page que vous voulez

// CONTENU: exo 15
// ----------------------------------------------------------------------------------------------------------- BACK
// variables - déclarer tableaux associatifs
$personne1 = [
    "prenom" => "Matthieu",
    "age" =>30,
    "sexe" => true
];
$personne2 = [
    "prenom" => "Marie",
    "age" =>32,
    "sexe" => false
];

/* ===================================================================== */
/*                            LES FONCTION                               */
/* ===================================================================== */
// moyenneNotes
function afficherPersonne($tableau){
    //
    // AFFICHER un tableau associatif -------------------------------------
    // pour afficher un tableau associatif on doit concaténer
    echo "Prénom : " . $tableau['prenom'] . '<br />';
    echo "age    : " . $tableau['age'] . '<br />';
    echo "Sexe   : " . (($tableau['sexe']===true)?"Homme":"Femme") . '<br />';
}

// ---------------------------------------------------------------------------------------------------------- FRONT
?>

<!-- Mettre ici le code html -->
<?php
echo '<div class="contenu-d-affichage">';
    echo "<h3>TABLEAUX Associatifs</h3><br/>";

    afficherPersonne($personne1); echo '<br/>';
    afficherPersonne($personne2); echo '<br/';
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