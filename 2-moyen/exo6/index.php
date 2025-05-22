<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 6 : attribut statique pour gérer les ID - class Maison."; //Mettre le nom du titre de la page que vous voulez
// CONTENU: exo 6
// ----------------------------------------------------------------------------------------------------------- BACK

// ================ POO : Programmation Orienté Objet =================================
// Générer (instancier) les maisons
require "maison.class.php";
$maison1 = new Maison(2018,3,98);
$maison2 = new Maison(2019,4,120);
$maison3 = new Maison(2017,4,160);

$maisons = [$maison1,$maison2,$maison3];


// ---------------------------------------------------------------------------------------------------------- FRONT
?>

<!-- Mettre ici le code html -->
<div class="contenu-d-affichage">
    <table class="table">
    <thead>
        <tr>
        <!-- En-tête du tableau -->
        <th scope="col">#ID</th>
        <th scope="col">Date</th>
        <th scope="col">Nombre de chambre</th>
        <th scope="col">Surface</th>
        </tr>
    </thead>
    <tbody>        
        <?php
        // toujours tester SI ce n'est pas vide & si c'est bien un tableau
        if(!empty($maisons) && is_array($maisons)){
            // BOUCLE sur le tableau de maisons ------------------------------------------------ DO1
            foreach ($maisons as $maison) {
                ?>                
                <tr>
                    <td><?= $maison->getId() ?></td>
                    <td><?= $maison->getDateCreation() ?></td>
                    <td><?= $maison->getNombreChambre() ?></td>
                    <td><?= $maison->getSurface() ?></td>
                </tr>                
                <?php
            }
            // FIN BOUCLE ----------------------------------------------------------------------- ENDO1
        }
        ?>
    </tbody>
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