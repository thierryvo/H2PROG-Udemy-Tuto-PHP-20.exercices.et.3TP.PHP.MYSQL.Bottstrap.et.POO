<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 20 : FORMULAIRE & TABLEAUX & METHODE POST"; //Mettre le nom du titre de la page que vous voulez

// CONTENU: exo 20
// ----------------------------------------------------------------------------------------------------------- BACK

/* ===================================================================== */
/*                            LES FONCTION                               */
/* ===================================================================== */
// calculerMoyenne---------------------------------------------------------
function calculerMoyenne($tableau){
    // ENTREE: $tableau  = [11,14,20]
    // PARCOURS du tableau: des notes --------------
    $resultat = 0;
    foreach($tableau as $item){
        // Cumul: $resultat = $resultat + $item
        $resultat += $item;        
    }
    $laMoyenne = $resultat / count($tableau);
    return $laMoyenne;
}

// POST: données transmise par post depuis le formulaire ci-dessous ------------------------------------------- POST
// en post les données sont cachées: {saisirlesnotes, pseudo, age, chiffre}
if(
    isset($_POST['saisirlesnotes']) AND
    isset($_POST['note1']) AND
    isset($_POST['note2']) AND
    isset($_POST['note3']))
    {
    // donnees
    $note1 = (int)$_POST['note1'];
    $note2 = (int)$_POST['note2'];
    $note3 = (int)$_POST['note3'];

    if(!empty($note1) AND !empty($note2) AND !empty($note3)){
        // Faire qqch...
        // Tableaux des notes
        $notes = [$note1,$note2,$note3];
        $lamoyenne = calculerMoyenne($notes);       ;

        echo "Faire qqch <br/>";
        echo "Pour ces 3 notes, la moyenne est de : $lamoyenne.<br/>";
    }else{
        // ko: vide
        echo "note1, note2, note3 sont obligatoires!";
    }//FINSI vide
}else{
    $note1=null;
    $note2=null;
    $note3=null;
}//FIN isset saisirlesnotes


// ---------------------------------------------------------------------------------------------------------- FRONT
?>

<!-- Mettre ici le code html -->
<div class="contenu-d-affichage">
    <!-- FORMULAIRE de SAISIE d une personne -->                    
    <form action="index.php" method="POST" class="form">
        <!-- note1 -->
        <div class="form-group">
            <label for="note1">Pseudo :</label>
            <input name="note1" placeholder="Saisir la note 1"
                   value="<?= $note1 ?>"
                   type="text" class="form-control" />
        </div>
        <!-- note2 -->
        <div class="form-group">
            <label for="note2">Pseudo :</label>
            <input name="note2" placeholder="Saisir la note 2"
                   value="<?= $note2 ?>"
                   type="text" class="form-control" />
        </div>
        <!-- note3 -->
        <div class="form-group">
            <label for="note3">Pseudo :</label>
            <input name="note3" placeholder="Saisir la note 3"
                   value="<?= $note3 ?>"
                   type="text" class="form-control" />
        </div>                


        <!-- BOUTON ENREGISTRER -->
        <input type="submit" class="btn btn-success" value="VALIDER" name="saisirlesnotes" />
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