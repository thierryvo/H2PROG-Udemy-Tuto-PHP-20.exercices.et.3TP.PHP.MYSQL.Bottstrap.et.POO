<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : tableau d' OBJET Animal - Tri en GET."; //Mettre le nom du titre de la page que vous voulez

// CONTENU: exo 4
// ----------------------------------------------------------------------------------------------------------- BACK
// Définir un class Animal
class Animal{
    // propriétées
    public $nom;
    public $age;
    public $type;
    //
    // CONSTRUCTEUR
    public function __construct($nom, $age, $type){
        $this->nom = $nom;
        $this->age = $age;
        $this->type = $type;
    }
}

// ================ POO : Programmation Orienté Objet =================================
// Générer (instancier) les 4 animaux
$ani1 = new Animal("Mina","2","chien");
$ani2 = new Animal("Tya","7","chat");
$ani3 = new Animal("Milo","4","chat");
$ani4 = new Animal("Hocket","6","chien");
$tabAnimaux =[$ani1,$ani2,$ani3,$ani4]; // un tableau de OBJETS Animal


/* ===================================================================== */
/*                            LES FONCTION                               */
/* ===================================================================== */
// afficherAnimalerie -----------------------------------------------------
function afficherAnimalerie(){
    // GLOBAL: $animaux - un tableau de TABLEAU Associatif
    global $tabAnimaux;
    echo "-----------------------------------------------<br/>";

    // 1ière BOUCLE sur le tableau des TABLEAUX (4 animaux)
    foreach($tabAnimaux as $animal){
        // Traitement: de chaque OBJET
        // Donc      : AFFICHER les propriétées de OBJETS Animal: nom, age, type 
        echo "Nom  :" . $animal->nom . "<br/>";
        echo "age  :" . $animal->age . "<br/>";
        echo "type :" . $animal->type . "<br/>";
        
        echo "---------------------------- <br/>";

    }
}

// afficherAnimalerie_parType ---------------------------------------------
function afficherAnimalerie_parType($type){
    // GLOBAL: $animaux - un tableau de TABLEAU Associatif
    global $tabAnimaux;
    echo "-----------------------------------------------<br/>";

    // 1ière BOUCLE sur le tableau des TABLEAUX (4 animaux)
    foreach($tabAnimaux as $animal){
        // SELECTION
        // Test du type d'Animal
        if($animal->type == $type){
            //
            // Traitement: de chaque OBJET
            // Donc      : AFFICHER les propriétées de OBJETS Animal: nom, age, type 
            echo "Nom  :" . $animal->nom . "<br/>";
            echo "age  :" . $animal->age . "<br/>";
            echo "type :" . $animal->type . "<br/>";            

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