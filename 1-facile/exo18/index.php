<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 18 : FORMULAIRE & METHODE GET"; //Mettre le nom du titre de la page que vous voulez

// CONTENU: exo 18
// ----------------------------------------------------------------------------------------------------------- BACK
if(
    isset($_GET['creerunepersonne']) AND
    isset($_GET['pseudo']) AND
    isset($_GET['age'])){
    // donnees
    $pseudo = trim(htmlspecialchars($_GET['pseudo']));
    $age = trim(htmlspecialchars($_GET['age']));

    if(!empty($pseudo) AND !empty($age)){
        // Faire qqch...
        echo "Faire qqch <br/>";
        echo "$pseudo à $age ans.";

    }else{
        // ko: vide
        echo "pseudo, age sont oblogatoires!";
    }//FINSI vide
}//FIN isset creerunepersonne


// ---------------------------------------------------------------------------------------------------------- FRONT
?>

<!-- Mettre ici le code html -->
<div class="contenu-d-affichage">
    <!-- FORMULAIRE de SAISIE d une personne -->                    
    <form action="index.php" method="GET" class="form">
        <!-- pseudo -->
        <div class="form-group">
            <label for="pseudo">Pseudo :</label>
            <input name="pseudo" placeholder="Saisir le Pseudo"
                    type="text" class="form-control" />
        </div>
        <!-- age -->
        <div class="form-group">
            <label for="age">Age :</label>
            <input name="age" placeholder="Saisir l'age"
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