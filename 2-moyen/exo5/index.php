<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 5 : tableau d'OBJET LIVRE - private & getters - Tri en POST."; //Mettre le nom du titre de la page que vous voulez
// CONTENU: exo 5
// ----------------------------------------------------------------------------------------------------------- BACK
// Définir un class Livre
class Livre{
    // propriétés
    private $nom;
    private $edition;
    private $auteur;
    private $dateParution;
    //
    // CONSTRUCTEUR
    public function __construct($nom, $edition, $auteur, $dateParution){
        $this->nom = $nom;
        $this->edition = $edition;
        $this->auteur = $auteur;
        $this->dateParution = $dateParution;
    }
    //
    // --------------------------- MEHODES --------------------------------------------
    // getters ------------------------------------------------------------------------
    // getEdition ---
    public function getEdition(){
        return $this->edition;
    }
    // getDateParution ---
    public function getDateParution(){
        return $this->dateParution;
    }

    // Méthode: toString() : qui permet à la class Livre de s'afficgher elle-même
    public function __toString(){
        // Concaténer txt,  le .=  sert à concaténer
        $txt="";
        $txt .= "Nom           : " . $this->nom . "<br/>";
        $txt .= "Edition       : " . $this->edition . "<br/>";
        $txt .= "Auteur        : " . $this->auteur . "<br/>";
        $txt .= "Date parution : " . $this->dateParution . "<br/>";
        return $txt;
    }
}

// ================ POO : Programmation Orienté Objet =================================
// Générer (instancier) les 5 livres
$liv1 = new Livre("tonton","babibar","toto","2000");
$liv2 = new Livre("tonton2","babibar","tata","2001");
$liv3 = new Livre("abelix","bebat","titi","2000");
$liv4 = new Livre("abelix2","bebat","titi","2000");
$liv5 = new Livre("abelix3","bebat","tutu","2001");

$tabLivres =[$liv1,$liv2,$liv3,$liv4,$liv5]; // un tableau de OBJET Livres


/* ===================================================================== */
/*                            LES FONCTION                               */
/* ===================================================================== */
// afficherLibrairie -----------------------------------------------------
function afficherLibrairie($livres){    
    echo "-----------------------------------------------<br/>";

    // 1ière BOUCLE sur le tableau des Livres
    foreach($livres as $livre){
        // Traitement: de chaque OBJET
        // Donc      : AFFICHER directement le Livre (grâce a la méthode toString)
        echo $livre;
        
        echo "---------------------------- <br/>";

    }
}

// afficherLibrairie_parEditionDate ---------------------------------------------
function afficherLibrairie_parEdition_Date($livres,$edition,$dateParution){
    echo "-----------------------------------------------<br/>";

    // 1ière BOUCLE sur le tableau des TABLEAUX (4 animaux)
    foreach($livres as $livre){
        // SELECTION
        // Test de la selection
        if(
            ($livre->getEdition() === $edition || $edition === "tous" ) && 
            ($livre->getDateParution() === $dateParution || $dateParution === "tous")
        ){
            //
            // Traitement: de chaque OBJET
            // Donc      : AFFICHER directement le Livre (grâce a la méthode toString)
            echo $livre;

            echo "---------------------------- <br/>";
        }//FINSI le type correcpond
    }
}

// ---------------------------------------------------------------------------------------------------------- FRONT
if(!isset($_POST['lancerlaselection'])){
    $edition=null;
    $dateParution=null;
}else{
    $edition = trim(htmlspecialchars($_POST['edition']));
    $dateParution = trim(htmlspecialchars($_POST['dateParution']));
}
?>

<!-- Mettre ici le code html -->
<div class="contenu-d-affichage">

    <!-- FORMULAIRE de SELECTION : edition, dateParution -------------------------------------------------- -->  
    <form action="index.php" method="post" class="form">                           
        <!-- edition  -->
        <!-- Sélecteur sur une liste en DURE -->
        <div class="form-group">
            <label for="edition">Edition :</label>
            <select name="edition" id="edition">
                <option value="tous" <?= $edition=="tous"?"selected":"" ?> >tous</option>
                <option value="babibar" <?= $edition=="babibar"?"selected":"" ?>>babibar</option>
                <option value="bebat" <?= $edition=="bebat"?"selected":"" ?>>bebat</option>
            </select>
        </div>
        <!-- dateParution -->
        <!-- Sélecteur sur une liste en DURE -->
        <div class="form-group">
            <label for="dateParution">Date Parution (aaaa) :</label>
            <select name="dateParution" id="dateParution">
                <option value="tous" <?= $dateParution=="tous"?"selected":"" ?>>tous</option>
                <option value="2000" <?= $dateParution=="2000"?"selected":"" ?>>2000</option>
                <option value="2001" <?= $dateParution=="2001"?"selected":"" ?>>2001</option>
            </select>
        </div>       
                            
        <!-- BOUTON VALIDER -->
        <button type="submit" class="btn btn-success" name="lancerlaselection">
            <span class="glyphicon glyphicon-save"></span>
            VALIDER
        </button>
    </form>    

</div>

<?php
// POST: edition, date d'un Livre ---------------------------------------------------------------------------- POST
//       l'information viens d un formulaire en post ci-dessous
if(
    isset($_POST['lancerlaselection']) AND 
    isset($_POST['edition']) AND 
    isset($_POST['dateParution']) ){
    // donnees
    $edition = trim(htmlspecialchars($_POST['edition']));
    $dateParution = trim(htmlspecialchars($_POST['dateParution']));
    $type="";
    if($edition == "tous" && $dateParution == "tous"){ $type="tous"; }
    
    if($type=="tous"){
        // TOUS
        afficherLibrairie($tabLivres);
    }else{
        // le type sélectionné
        afficherLibrairie_parEdition_Date($tabLivres,$edition,$dateParution);
    }
}else{
    afficherLibrairie($tabLivres);    
}//FINSI isset lancerlaselection
?>


<?php
/***********************************************************************
 * NE PAS MODIFIER: PERMET d INCLURE LE MENU ET LE TEMPLATE
 ***********************************************************************/
// VIDER le buffer pour: Mettre le contenu $content dedans : le template
$content = ob_get_clean();
require "../../global/common/template.php";
?>