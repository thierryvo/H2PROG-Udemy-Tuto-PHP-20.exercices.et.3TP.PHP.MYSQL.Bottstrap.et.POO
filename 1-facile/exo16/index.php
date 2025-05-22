<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 16 : TABLEAUX associatifs - tableaux de tableaux associatifs"; //Mettre le nom du titre de la page que vous voulez

// CONTENU: exo 16
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
$personne3 = [
    "prenom" => "Marc",
    "age" =>25,
    "sexe" => true
];
$personne4 = [
    "prenom" => "Mathilde",
    "age" =>21,
    "sexe" => false
];
$personne5 = [
    "prenom" => "Hailee Steinfeld",
    "age" =>25,
    "sexe" => false
];

// Un tableaux de tableaux assocoatif
$personnes = [$personne1, $personne2, $personne3, $personne4, $personne5];


/* ===================================================================== */
/*                            LES FONCTION                               */
/* ===================================================================== */
// moyenneNotes
function afficherPersonne($tableau, $numero){
    //
    // AFFICHER un tableau associatif -------------------------------------
    // pour afficher un tableau associatif on doit concaténer
    echo "($numero) Prénom : " . $tableau['prenom'] . '<br />';
    echo "($numero) age    : " . $tableau['age'] . '<br />';
    echo "($numero) Sexe   : " . (($tableau['sexe']===true)?"Homme":"Femme") . '<br />';
}

// ---------------------------------------------------------------------------------------------------------- FRONT
?>

<!-- Mettre ici le code html -->
<?php
echo '<div class="contenu-d-affichage">';
    echo "<h3>TABLEAUX Associatifs</h3><br/>";

    // Parcourir toutes les personnes
    foreach ($personnes as $key => $value) {
        # code...
        afficherPersonne($value, $key); echo '<br/>';
    }
    
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