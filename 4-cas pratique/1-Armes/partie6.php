<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Partie 6 - POO Gestion d'images en fonction du level - Les armes Class Arme."; //Mettre le nom du titre de la page que vous voulez
// CONTENU: Partie 6
// ----------------------------------------------------------------------------------------------------------- BACK
// variables
class Arme{
    // propriétés
    private $nom;
    private $description;
    private $level;
    private $image;
    // CONSTRUCTEUR:
    public function __construct($nom,$description){
        $this->nom = $nom;
        $this->description = $description;
        $this->level = 1;
        $this->image = "";
    }
    // getters -------------------------------------------------
    public function getNom(){ return $this->nom; }
    public function getDescription(){ return $this->description; }
    public function getLevel(){ return $this->level; }
    public function getImage(){ return $this->image; }
    // setters -------------------------------------------------
    public function setLevel($level){ $this->level = $level; }
    public function setImage($image){ $this->image = $image; }
    // toString ------------------------------------------------
    public function __tostring(){
        $txt="";
        //
        $txt .= '<div class="row align-items-center margetop20">';
            $txt .= '<div class="col-1 pour-l-image text-center">' ;
                $txt .= '<img src="' . $this->image . '" alt="' . $this->image . '" style="height: 60px;" />';
            $txt .= '</div>';
            $txt .= '<div class="col-auto pour-textes-a-droite-image">';
                $txt .= '<h3>Arme : ' . $this->nom . '</h3>';
                $txt .= '<p>' . $this->description . '</p>';
            $txt .= '</div>';
        $txt .= '</div>';
        //
        return $txt;
    }

    // getNomImage ---------------------------------------------
    public function getNomImage(){
        // on peut calculer un nom d'image à partir du nom de l'arme
        // nomAuxiliere est le nom de l'arme sans les caractères spéciaux
        $lesAccents = ["é","è","ë","ê","ç","à","ù"];
        $mot = $this->nom;

        $laRecherche = $lesAccents;
        $remplacerPar = ["e","e","e","e","c","a","u"];; // Remplace chaque caractère par son cacrtère sans accent
        $mot_a_modifier = $mot; // le mot sur lequel on souhate faire les modifications
        $nomSansAccent = str_replace($laRecherche, $remplacerPar, $mot_a_modifier);

        // exemple:  sources/epee/epee1.png
        $unNom = "";
        $unNom .= "sources/";
        $unNom .= $nomSansAccent . "/" . $nomSansAccent;
        $unNom .= (string)$this->level;
        $unNom .= ".png";
        //
        return $unNom;
    }
}
//
// Instancier les Objets
$arme1 = new Arme("épée","Une arme tranchante");
$arme2 = new Arme("arc","Une arme à distance");
$arme3 = new Arme("hache","Une arme tranchante ou un outil pou couper du bois");
$arme4 = new Arme("fleau","Une arme contondante du moyen age");

// image à calculer en fonction du nom et du level**
$uneImage = $arme1->getNomImage();
$arme1->setImage($uneImage); // epee1
$uneImage = $arme2->getNomImage();
$arme2->setImage($uneImage); // arc1

$arme3->setLevel(3);         // 3
$uneImage = $arme3->getNomImage();
$arme3->setImage($uneImage); // hache3
$arme4->setLevel(4);         // 4 
$uneImage = $arme4->getNomImage();
$arme4->setImage($uneImage); // fleau4

$armes = [$arme1,$arme2,$arme3,$arme4];


// ---------------------------------------------------------------------------------------------------------- FRONT
?>
<!-- Mettre ici le code html -->
< class="contenu-d-affichage">

    <b>Voici toutes les armes - dans un tableau foreach PHP</b>
    <br/>

    <?php 
    // BOUCLE foreach -------------------------- DO
    foreach($armes as $key => $value){
        ?>
        <div class="row align-items-center margetop20">
            <div class="col-1 pour-l-image text-center">
                <img src="<?= $value->getImage() ?>" alt="<?= $value->getImage() ?>" style="height: 60px;" />
            </div>
            <div class="col-auto pour-textes-a-droite-image">
                <h3>Arme <?= $key+1 ?> : <?= $value->getNom() ?></h3>
                <p><?= $value->getDescription() ?></p>
            </div>
        </div>
    <?php 
    }
    // FIN BOUCLE foreach -------------------- ENDDO
    ?>    

</div>

<?php
/***********************************************************************
 * NE PAS MODIFIER: PERMET d INCLURE LE MENU ET LE TEMPLATE
 ***********************************************************************/
// VIDER le buffer pour: Mettre le contenu $content dedans : le template
$content = ob_get_clean();
require "../../global/common/template.php";
?>