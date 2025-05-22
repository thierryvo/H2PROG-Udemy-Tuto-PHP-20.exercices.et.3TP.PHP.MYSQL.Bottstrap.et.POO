<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 1 : TABLEAU à DEUX Dimensions - TABLE DE MULTIPLICATION"; //Mettre le nom du titre de la page que vous voulez

// CONTENU: exo 1
// ----------------------------------------------------------------------------------------------------------- BACK
// CREER le tableaux à deux dimension
// jj indice ligne
// ii indice colonne
$ligne = [];
for($jj=1;$jj <= 10;$jj++){
    $colonne = [];
    for($ii=1;$ii <= 10;$ii++){
        // Remplir chaque colonne: multiplier ii * jj
        $colonne[] = $ii * $jj;
    }
    // 
    // Remplir les colonnes dans les lignes
    $ligne[] = $colonne;
}


// ---------------------------------------------------------------------------------------------------------- FRONT
?>

<!-- Mettre ici le code html -->
<div class="contenu-d-affichage">
    <!-- on met la matrice dans une table html -->
    <table class="table">
        <?php
        // jj boucle sur les lignes -------------------------------- DO1
        for($jj=0;$jj < 10;$jj++){
        ?>
            <tr <?= ($jj==0) ? 'class="font-weight-bold"':'' ?>>
                <?php
                // ii boucle sur les colonens ---------------------- DO2
                for($ii=0;$ii < 10;$ii++){
                ?>     
                    <td <?= ($ii==0) ? 'class="font-weight-bold"':'' ?>><?= $ligne[$jj][$ii] ?></td>
                <?php 
                }
                // ---------------------------------------------- ENDDO2
                ?>                        
            </tr>
        <?php 
        }
        // ------------------------------------------------------ ENDDO1
        ?>
    </table>
</div>


<?php
/***********************************************************************
 * NE PAS MODIFIER: PERMET d INCLURE LE MENU ET LE TEMPLATE
 ***********************************************************************/
// VIDER le buffer pour: Mettre le contenu $content dedans : le template
$content = ob_get_clean();
require "../../global/common/template.php";
?>