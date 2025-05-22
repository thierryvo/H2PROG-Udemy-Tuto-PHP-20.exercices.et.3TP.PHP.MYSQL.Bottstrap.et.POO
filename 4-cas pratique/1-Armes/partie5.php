<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Partie 5 - Programmation Orientée Objet (POO) - Les armes **Amélioration de la Class Arme**."; //Mettre le nom du titre de la page que vous voulez
// CONTENU: Partie 5
// ----------------------------------------------------------------------------------------------------------- BACK
// variables
class Arme{
    // propriétés
    private $nom;
    private $description;
    private $image;
    // CONSTRUCTEUR:
    public function __construct($nom,$description,$image){
        $this->nom = $nom;
        $this->description = $description;
        $this->image = $image;
    }
    // getters -------------------------------------------------
    public function getNom(){ return $this->nom; }
    public function getDescription(){ return $this->description; }
    public function getImage(){ return $this->image; }
    // setters -------------------------------------------------
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
}
//
// Instancier les Objets
$arme1 = new Arme("épée","Une arme tranchante","sources/epee/epee1.png");
$arme2 = new Arme("arc","Une arme à distance","sources/arc/arc1.png");
$arme3 = new Arme("hache","Une arme tranchante ou un outil pou couper du bois","sources/hache/hache1.png");
$arme4 = new Arme("fleau","Une arme contondante du moyen age","sources/fleau/fleau1.png");

// image aléatoire:
$unRandom = rand(1,5);
$uneImage = "sources/epee/epee" . $unRandom . ".png";
$arme1->setImage($uneImage); // epee
$unRandom = rand(1,2);
$uneImage = "sources/arc/arc" . $unRandom . ".png";
$arme2->setImage($uneImage); // arc
$unRandom = rand(1,5);
$uneImage = "sources/hache/hache" . $unRandom . ".png";
$arme3->setImage($uneImage); // hache
$unRandom = rand(1,5);
$uneImage = "sources/fleau/fleau" . $unRandom . ".png";
$arme4->setImage($uneImage); // fleau

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