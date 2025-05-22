<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Partie 1 - Variables."; //Mettre le nom du titre de la page que vous voulez
// CONTENU: Partie 1
// ----------------------------------------------------------------------------------------------------------- BACK
// variables
$arme1 = "épée";
$arme2 = "arc";
$arme3 = "hache";
$arme4 = "fléeau";


// ---------------------------------------------------------------------------------------------------------- FRONT
?>
<!-- Mettre ici le code html -->
<div class="contenu-d-affichage">

    <b>Voici toutes les armes</b>
    <p>
        Arme 1 : <?= $arme1 ?><br/>
        Arme 2 : <?= $arme2 ?><br/>
        Arme 3 : <?= $arme3 ?><br/>
        Arme 4 : <?= $arme4 ?><br/>
    </p>

    <!-- La liste déroulante -->
    <select name="" id="">
        <option value="">Choisir une arme</option>
        <option value=""><?= $arme1 ?></option>
        <option value=""><?= $arme2 ?></option>
        <option value=""><?= $arme3 ?></option>
        <option value=""><?= $arme4 ?></option>
    </select>
</div>

<?php
/***********************************************************************
 * NE PAS MODIFIER: PERMET d INCLURE LE MENU ET LE TEMPLATE
 ***********************************************************************/
// VIDER le buffer pour: Mettre le contenu $content dedans : le template
$content = ob_get_clean();
require "../../global/common/template.php";
?>