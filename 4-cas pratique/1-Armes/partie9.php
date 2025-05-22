<?php session_start();
if(!isset($_SESSION['armes'])) {
    $_SESSION['armes']=null;
}
//
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Partie 9 - POO Liste déroulante et Formulaire + SESSION - Les armes Class Arme."; //Mettre le nom du titre de la page que vous voulez
// CONTENU: Partie 9
// ----------------------------------------------------------------------------------------------------------- BACK
// variables
class Arme{
    // propriétés
    private $nom;
    private $description;
    private $level;
    private $levelMax;
    private $image;
    // CONSTRUCTEUR:
    public function __construct($nom,$description,$levelMax){
        $this->nom = $nom;
        $this->description = $description;
        $this->level = 1;
        $this->levelMax = $levelMax;
        $this->image = "";
    }
    // getters -------------------------------------------------
    public function getNom(){ return $this->nom; }
    public function getDescription(){ return $this->description; }
    public function getLevel(){ return $this->level; }
    public function getLevelMax(){ return $this->levelMax; }
    public function getImage(){ return $this->image; }
    // setters -------------------------------------------------
    public function setLevel($level){ $this->level = $level; }
    public function setLevelMax($levelMax){ $this->levelMax = $levelMax; }
    public function setImage($image){ $this->image = $image; }
    public function set_Image(){ 
        // surcharge de setImage 
        // Avec: prise en charge du nouveau level
        $nomImageCalcul = $this->getNomImage();
        $this->setImage($nomImageCalcul);
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
if(empty($armes)){
    // instancier les objets
    $arme1 = new Arme("épée","Une arme tranchante",5);
    $arme2 = new Arme("arc","Une arme à distance",2);
    $arme3 = new Arme("hache","Une arme tranchante ou un outil pou couper du bois",5);
    $arme4 = new Arme("fleau","Une arme contondante du moyen age",5);

    // image à calculer en fonction du nom de l'arme et du level de l'arme**
    $arme1->set_Image();
    $arme2->set_Image();
    
    $arme3->setLevel(3);
    $arme3->set_Image();
    $arme4->setLevel(4);
    $arme4->set_Image();

    $armes = [$arme1,$arme2,$arme3,$arme4];
    $_SESSION['armes'] = $armes;
 }


// ISSET level ---------------------------------------------------------------------------------------------- ISSET
if(
    isset($_GET['key']) AND 
    isset($_GET['level']) ){
        // donnees
        $ii = (int)$_GET['key'];
        $level = (int)$_GET['level'];
        $armes=$_SESSION['armes'];

        // je me sert de la key du parcopurs foreach comme indice de tableau
        $armes[$ii]->setLevel($level);
        $armes[$ii]->set_Image();

        $_SESSION['armes']=$armes;
}//FINSI isset



// ---------------------------------------------------------------------------------------------------------- FRONT
//var_dump( $_SESSION['armes']);
$armes=$_SESSION['armes'];
?>
<!-- Mettre ici le code html -->
<div class="contenu-d-affichage">

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
            <div class="col-2 pour-le-selecteur-level text-center">
                <!-- level  /  SELECT -->
                <!-- level : un formulaire déclenche un get sur onChange du select -->
                <form action="" method="GET">                
                    <input type="hidden" name="key" value="<?= $key ?>" />

                    <select name="level" onChange="submit()">
                        <option value="">Choisir un level</option>
                        <?php                    
                        // BOUCLE sur les niveaux
                        $nb = $value->getLevelMax();
                        for ($ii=1;$ii <= $nb;$ii++) {
                            ?>
                            <option value="<?= $ii ?>"
                                    <?= ($ii == $value->getLevel())?"selected":"" ?> >
                                <?= $ii ?> : Level <?= $ii ?>
                            </option>
                            <?php
                        }
                        // FIN BOUCLE
                        ?>
                    </select>                    
                </form>
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