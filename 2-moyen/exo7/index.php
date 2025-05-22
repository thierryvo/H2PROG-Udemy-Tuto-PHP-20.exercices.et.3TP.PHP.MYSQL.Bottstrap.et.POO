<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 7 : Manipuler deux class Player & Arme - Sachant qu'un player possède une arme."; //Mettre le nom du titre de la page que vous voulez
// CONTENU: exo 7
// ----------------------------------------------------------------------------------------------------------- BACK

// ================ POO : Programmation Orienté Objet =================================
// Générer (instancier) les maisons
require "player.class.php";
require "arme.class.php";
$arme1 = new Arme("Hache","10");
$arme2 = new Arme("Epée","8");




echo "arme n est pas une arme";
var_dump($arme1);
var_dump($arme2);



$player1 = new Player();
$player1->setNom("Milo");
$player1->setIdArme($arme1->getId());

$player2 = new Player();
$player2->setNom("Tya");
$player2->setIdArme($arme2->getId());

$tabPlayers = [$player1,$player2];


// ---------------------------------------------------------------------------------------------------------- FRONT
?>

<!-- Mettre ici le code html -->
<div class="contenu-d-affichage">
    <?php 
        echo $player1;
        echo "<br/>";
        echo $player2;
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