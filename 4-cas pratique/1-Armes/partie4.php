<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Partie 4 - Programmation Orientée Objet (POO) - Les armes."; //Mettre le nom du titre de la page que vous voulez
// CONTENU: Partie 4
// ----------------------------------------------------------------------------------------------------------- BACK
// variables
class Arme{
    // propriétés
    public $nom;
    public $description;
    public $image;
    // CONSTRUCTEUR:
    public function __construct($nom,$description,$image){
        $this->nom = $nom;
        $this->description = $description;
        $this->image = $image;
    }
}
//
// Instancier les Objets
$arme1 = new Arme("épée","Une arme tranchante","sources/epee/epee1.png");
$arme2 = new Arme("arc","Une arme à distance","sources/arc/arc1.png");
$arme3 = new Arme("hache","Une arme tranchante ou un outil pou couper du bois","sources/hache/hache1.png");
$arme4 = new Arme("fleau","Une arme contondante du moyen age","sources/fleau/fleau1.png");

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
                <img src="<?= $value->image ?>" alt="<?= $value->image ?>" style="height: 60px;" />
            </div>
            <div class="col-auto pour-textes-a-droite-image">
                <h3>Arme <?= $key+1 ?> : <?= $value->nom ?></h3>
                <p><?= $value->description ?></p>
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