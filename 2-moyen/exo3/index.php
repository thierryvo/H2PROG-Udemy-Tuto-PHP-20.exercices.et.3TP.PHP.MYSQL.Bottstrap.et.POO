<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 3 : tableau de TABLEAUX Associatif - Tri en GET."; //Mettre le nom du titre de la page que vous voulez

// CONTENU: exo 3
// ----------------------------------------------------------------------------------------------------------- BACK
// variables tableau des animaux
$tab1 = [
    "nom" => "Mina",
    "age" => "2",
    "type" => "chien"
];
$tab2 = [
    "nom" => "Tya",
    "age" => "7",
    "type" => "chat"
];
$tab3 = [
    "nom" => "Milo",
    "age" => "4",
    "type" => "chat"
];
$tab4 = [
    "nom" => "Hocket",
    "age" => "6",
    "type" => "chien"
];
$animaux = [$tab1,$tab2,$tab3,$tab4]; // un tableau de TABLEAUX Assiciatif


/* ===================================================================== */
/*                            LES FONCTION                               */
/* ===================================================================== */
// afficherAnimalerie -----------------------------------------------------
function afficherAnimalerie(){
    // GLOBAL: $animaux - un tableau de TABLEAU Associatif
    global $animaux;
    echo "-----------------------------------------------<br/>";

    // 1ière BOUCLE sur le tableau des TABLEAUX (4 animaux)
    foreach($animaux as $animal){
        // Traitement: de chaque tableau Associatif
        // Donc      : 2ième boucle sur les valeurs du tableau Associatif: nom, age, type 
        foreach($animal as $key => $valeur){
            // key   : c'est la key soit: nom, age, type 
            // valeur: c'est sa valeur correspondante à droite du =>

            // exemple: nom : Hocket
            echo $key . " : " . $valeur . "<br/>";
        }
        echo "---------------------------- <br/>";

    }
}

// afficherAnimalerie_parType ---------------------------------------------
function afficherAnimalerie_parType($type){
    // GLOBAL: $animaux - un tableau de TABLEAU Associatif
    global $animaux;
    echo "-----------------------------------------------<br/>";

    // 1ière BOUCLE sur le tableau des TABLEAUX (4 animaux)
    foreach($animaux as $animal){
        // SELECTION
        // Test du type d'Animal
        if($animal['type'] == $type){
            //
            // Traitement: de chaque tableau Associatif
            // Donc      : 2ième boucle sur les valeurs du tableau Associatif: nom, age, type 
            foreach($animal as $key => $valeur){
                // key   : c'est la key soit: nom, age, type 
                // valeur: c'est sa valeur correspondante à droite du =>

                // exemple: nom : Hocket
                echo $key . " : " . $valeur . "<br/>";
            }
            echo "---------------------------- <br/>";
        }//FINSI le type correcpond
    }
}


// ---------------------------------------------------------------------------------------------------------- FRONT
?>

<!-- Mettre ici le code html -->
<div class="contenu-d-affichage">
    <!-- Les 3 BOUTONS de SELECTION: TOUS chiens chats -->
    <div>
        <a href="index.php?type=tous" class="btn btn-primary">TOUS</a>
        <a href="index.php?type=chien" class="btn btn-primary">chien</a>
        <a href="index.php?type=chat" class="btn btn-primary">chat</a>
    </div>
</div>

<?php
// GET: type d Animal ----------------------------------------------------------------------------------------- GET
//      l'information viens d une url donc en get
//      url du BOUTON ci-dessous
if(isset($_GET['type'])){
    // donnees
    $type = trim(htmlspecialchars($_GET['type']));

    if(!empty($type)){
        if($type=="tous"){
            // TOUS
            afficherAnimalerie();
        }else{
            // le type sélectionné
            afficherAnimalerie_parType($type);
        }        
    }
}else{
    afficherAnimalerie();
}//FINSI isset
?>


<?php
/***********************************************************************
 * NE PAS MODIFIER: PERMET d INCLURE LE MENU ET LE TEMPLATE
 ***********************************************************************/
// VIDER le buffer pour: Mettre le contenu $content dedans : le template
$content = ob_get_clean();
require "../../global/common/template.php";
?>