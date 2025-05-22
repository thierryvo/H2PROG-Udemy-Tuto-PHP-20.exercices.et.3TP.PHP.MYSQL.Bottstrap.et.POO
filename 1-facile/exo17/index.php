<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 17 : TABLEAUX complexes - tableaux de tableaux associatifs contenant un tableau de notes"; //Mettre le nom du titre de la page que vous voulez

// CONTENU: exo 17
// ----------------------------------------------------------------------------------------------------------- BACK
// variables - déclarer tableaux associatifs
$personne1 = [
    "prenom" => "Matthieu",
    "age" =>30,
    "sexe" => true,
    "notes" => [12,15,13,7,18]
];
$personne2 = [
    "prenom" => "Marie",
    "age" =>32,
    "sexe" => false,
    "notes" => [11,14,10,4,20,8,2]
];
$personne3 = [
    "prenom" => "Marc",
    "age" =>25,
    "sexe" => true,
    "notes" => [5,13,9,3]
];
$personne4 = [
    "prenom" => "Mathilde",
    "age" =>21,
    "sexe" => false,
    "notes" => [6,11,15,2]
];
$personne5 = [
    "prenom" => "Hailee Steinfeld",
    "age" =>25,
    "sexe" => false,
    "notes" => [14,14,16,17,17,19,18]
];

// Un tableaux de tableaux assocoatif
$personnes = [$personne1, $personne2, $personne3, $personne4, $personne5];


/* ===================================================================== */
/*                            LES FONCTION                               */
/* ===================================================================== */
// moyenneNotes------------------------------------------------------------
function moyenneNotes($tableau){
    // ENTREE: $tableau  = [11,14,10,4,20,8,2]
    // PARCOURS du tableau: des notes --------------
    $resultat = 0;
    foreach($tableau as $item){
        // Cumul: $resultat = $resultat + $item
        $resultat += $item;        
    }
    $laMoyenne = $resultat / count($tableau);
    return $laMoyenne;
}

// afficherPersonne -------------------------------------------------------
function afficherPersonne($tableau, $numero){
    // ENTREE: $tableau  = C'est un tableau associatif complexes
    //       : $numero   = un index(indice) dans le tableaux
    //
    // AFFICHER un tableau associatif -------------------------
    // pour afficher un tableau associatif on doit concaténer
    echo "($numero) Prénom : " . $tableau['prenom'] . '<br />';
    echo "($numero) age    : " . $tableau['age'] . '<br />';
    echo "($numero) Sexe   : " . (($tableau['sexe']===true)?"Homme":"Femme") . '<br />';
    // puis les notes
    echo "($numero) Notes  : ";
    foreach ($tableau["notes"] as $key => $valeur) {                
        if($key > 0){ echo ", "; }
        echo $valeur;
    }
    echo '<br/>';
    echo "($numero) Moyenne: " . (string)moyenneNotes($tableau["notes"]);
    echo "<br/><br/>";
}

// ---------------------------------------------------------------------------------------------------------- FRONT
?>

<!-- Mettre ici le code html -->
<?php
echo '<div class="contenu-d-affichage">';
    echo "<h3>TABLEAUX Associatifs</h3><br/>";

    // Parcourir toutes les personnes
    foreach ($personnes as $key => $value) {
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