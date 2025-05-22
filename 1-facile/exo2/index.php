<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : Variables et ternaires"; //Mettre le nom du titre de la page que vous voulez

// CONTENU: exo 2
// ----------------------------------------------------------------------------------------------------------- BACK
$nom    = "Marie";
$age    = 30;
$homme  = false;

$nom2   = "Pierre";
$age2   = 32;
$homme2 = true;


// ---------------------------------------------------------------------------------------------------------- FRONT
?>

<!-- Mettre ici le code -->
<?php
echo '<p>';
echo $nom. " à ". (string)$age   ." ans";
echo (!$homme) ? " et c'est une femme" : " et c'est un homme";

echo "<br/><br/>";
echo $nom2. " à ". (string)$age2   ." ans";
echo (!$homme2) ? " et c'est une femme" : " et c'est un homme";
echo "<br/><br/>";
echo '</p>';
?>

<!-- Autre écriture en html -->
<p>
<?= $nom2 ?> à <?= $age2 ?> ans
<?= (!$homme2) ? " et c'est une femme" : " et c'est un homme" ?>
</p>


<?php
/***********************************************************************
 * NE PAS MODIFIER: PERMET d INCLURE LE MENU ET LE TEMPLATE
 ***********************************************************************/
// VIDER le buffer pour: Mettre le contenu $content dedans : le template
$content = ob_get_clean();
require "../../global/common/template.php";
?>

