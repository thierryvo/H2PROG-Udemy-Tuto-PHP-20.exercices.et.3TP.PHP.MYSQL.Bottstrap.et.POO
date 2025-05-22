<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 19 : FORMULAIRE & METHODE POST"; //Mettre le nom du titre de la page que vous voulez

// CONTENU: exo 19
// ----------------------------------------------------------------------------------------------------------- BACK

/* ===================================================================== */
/*                            LES FONCTION                               */
/* ===================================================================== */
// isPair
function isPair($nombre){
    // SI le MODULO 2 d'un nombre est égale à zéro: c'est que c'est PAIR
    // le    modulo   en fait c'est le:  reste de nombre / 2
    $moduloDeux = $nombre % 2; // % c'est le modulo 
    if($moduloDeux == 0){
        // C'est PAIR
        return true;
    }else{
        // C'est IMPAIR
        return false;
    }
}

// POST: données transmise par post depuis le formulaire ci-dessous ------------------------------------------- POST
// en post les données sont cachées: {creerunepersonne, pseudo, age, chiffre}
if(
    isset($_POST['creerunepersonne']) AND
    isset($_POST['pseudo']) AND
    isset($_POST['age']) AND
    isset($_POST['chiffre']))
    {
    // donnees
    $pseudo = trim(htmlspecialchars($_POST['pseudo']));
    $age = trim(htmlspecialchars($_POST['age']));
    $chiffre = (int)$_POST['chiffre'];

    if(!empty($pseudo) AND !empty($age) AND !empty($chiffre)){
        // Faire qqch...
        echo "Faire qqch <br/>";
        echo "$pseudo à $age ans, le chiffre choisi est $chiffre.";
        echo " Ce chiffre $chiffre est";
        echo ((isPair($chiffre))===true)?" pair.":" impair."; echo '<br/>';

    }else{
        // ko: vide
        echo "pseudo, age, chiffre sont obligatoires!";
    }//FINSI vide
}else{
    $pseudo=null;
    $age=null;
    $chiffre=null;
}//FIN isset creerunepersonne


// ---------------------------------------------------------------------------------------------------------- FRONT
?>

<!-- Mettre ici le code html -->
<div class="contenu-d-affichage">
    <!-- FORMULAIRE de SAISIE d une personne -->                    
    <form action="index.php" method="POST" class="form">
        <!-- pseudo -->
        <div class="form-group">
            <label for="pseudo">Pseudo :</label>
            <input name="pseudo" placeholder="Saisir le Pseudo"
                   value="<?= $pseudo ?>"
                   type="text" class="form-control" />
        </div>
        <!-- age -->
        <div class="form-group">
            <label for="age">Age :</label>
            <input name="age" placeholder="Saisir l'age"
                   value="<?= $age ?>"
                   type="text" class="form-control" />
        </div>
        <!-- chiffre -->
        <div class="form-group">
            <label for="chiffre">Chiffre :</label>
            <input name="chiffre" placeholder="Saisir un chiffre"
                   value="<?= $chiffre ?>"
                   type="text" class="form-control" />
        </div>

        <!-- BOUTON ENREGISTRER -->
        <input type="submit" class="btn btn-success" value="VALIDER" name="creerunepersonne" />
    </form>
</div>


<?php
/***********************************************************************
 * NE PAS MODIFIER: PERMET d INCLURE LE MENU ET LE TEMPLATE
 ***********************************************************************/
// VIDER le buffer pour: Mettre le contenu $content dedans : le template
$content = ob_get_clean();
require "../../global/common/template.php";
?>