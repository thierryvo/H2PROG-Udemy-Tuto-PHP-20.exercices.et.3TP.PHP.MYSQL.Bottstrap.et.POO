<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Partie 2 - TABLEAUX & BOUCLE - (for/foreach)."; //Mettre le nom du titre de la page que vous voulez
// CONTENU: Partie 1
// ----------------------------------------------------------------------------------------------------------- BACK
// variables
$arme1 = "épée";
$arme2 = "arc";
$arme3 = "hache";
$arme4 = "fléeau";

$armes = [$arme1,$arme2,$arme3,$arme4];


// ---------------------------------------------------------------------------------------------------------- FRONT
?>
<!-- Mettre ici le code html -->
<div class="contenu-d-affichage">

    <b>Voici toutes les armes - dans un tableau PHP</b>
    <p>
        Arme 1 : <?= $armes[0] ?><br/>
        Arme 2 : <?= $armes[1] ?><br/>
        Arme 3 : <?= $armes[2] ?><br/>
        Arme 4 : <?= $armes[3] ?><br/>
    </p>


    <br/>
    <b>Voici toutes les armes - dans une boucle for PHP</b>
    <p>
    <?php 
    // BOUCLE for ------------------------------ DO
    for($ii=0;$ii < count($armes);$ii++){
        ?>
        Arme <?= $ii+1 ?> : <?= $armes[$ii] ?><br/>
    <?php 
    }
    // FON BOUCLE for ----------------------- ENDDO
    ?>
    </p>

    
    <br/>
    <b>Voici toutes les armes - dans une boucle foreach PHP</b>
    <p>
    <?php 
    // BOUCLE foreach -------------------------- DO
    foreach($armes as $key => $value){
        ?>
        Arme <?= $key+1 ?> : <?= $value ?><br/>
    <?php 
    }
    // FIN BOUCLE foreach -------------------- ENDDO
    ?>
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