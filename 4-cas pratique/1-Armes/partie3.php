<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Partie 3 - TABLEAUX ASSOCIATIF - Les armes."; //Mettre le nom du titre de la page que vous voulez
// CONTENU: Partie 3
// ----------------------------------------------------------------------------------------------------------- BACK
// variables
$arme1 = [
    "nom" => "épée",
    "image" => "sources/epee/epee1.png",
    "description" => "Une arme tranchante"
];
$arme2 = [
    "nom" => "arc",
    "image" => "sources/arc/arc1.png",
    "description" => "Une arme à distance"
];
$arme3 = [
    "nom" => "hache",
    "image" => "sources/hache/hache1.png",
    "description" => "Une arme tranchante ou un outil pou couper du bois"
];
$arme4 = [
    "nom" => "fleau",
    "image" => "sources/fleau/fleau1.png",
    "description" => "Une arme contondante du moyen age"
];

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
                <img src="<?= $value["image"] ?>" alt="<?= $value["image"] ?>" style="height: 60px;" />
            </div>
            <div class="col-auto pour-textes-a-droite-image">
                <h3>Arme <?= $key+1 ?> : <?= $value["nom"] ?></h3>
                <p><?= $value["description"] ?></p>
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