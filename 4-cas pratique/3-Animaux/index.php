<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Les animaux."; //Mettre le nom que vous voulez
// http://localhost/H2PROG/Udemy/programme/4-cas%20pratique/3-Animaux/index.php

// -------------------------------------------------------------------------------------------------------------------- BACK
// partie controleur----------------------------------------------------------------CONTROLEUR
require_once("animalDAO.class.php");
require_once("animal.class.php");
$animaux = AnimalDAO::getAnimauxBD();
foreach ($animaux as $key => $animal) {
    // data satellite
    // type animal (libellé)
    // images
    $libelletype = AnimalDAO::getTypeAnimalBD($animal["idAnimal"]);
    $images = AnimalDAO::getImagesAnimalBD($animal["idAnimal"]);

    // instancier un animal:  via la class Animal => alimente le TABLEAUX static $mesAnimaux
    new Animal(
        (int)$animal["idAnimal"],
        (int)$animal["idtype"],
        $animal["nom"],
        (int)$animal["age"],
        (int)$animal["sexe"],
        $libelletype,
        $images
    );
}


// -------------------------------------------------------------------------------------------------------------------- FRONT
// partie vue-------------------------------------------------------------------------------------------------------------VUE
?>
<!-- Mettre ici le code html -->
<div class="contenu-d-affichage">
    <!-- TABLE bootstrap pour afficher les animaux -->
    <?php
    // =========== TABLE pour afficher les animaux ============
    // toujours tester SI ce n'est pas vide & si c'est bien un tableau 
    if(Animal::countAnimal() > 0){
    ?>                
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <!-- ENTETE colonnes -->
                <th scope="col">#ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Age</th>
                <th scope="col">Sexe</th>
                <th scope="col">Type</th>
                <th scope="col">Images</th>
            </tr>
        </thead>

        <tbody>
            <?php
            // BOUCLE sur la liste des animaux ----------------------------------------------------------- DO1
            foreach (Animal::$mesAnimaux as $key => $animal) {
                ?>
                <tr>
                    <td style="vertical-align:middle"><?= $animal->getId() ?> </td>
                    <td><?= $animal->getNom() ?> </td>
                    <td><?= $animal->getAge() ?> </td>
                    <td><?= ($animal->getSexe())?"Mâle":"Femelle"; ?> </td>
                    <td><?= $animal->getLibelleType() ?> </td>
                    <td style="width:200px;" class="text-center">                     
                        <?php
                        // BOUCLE sur la liste des images / animal --------------------------------------- DO2
                        foreach ($animal->getImages() as $key => $itemImage) {
                            ?>                        
                            <img src="images/<?= $itemImage['imageChemin'] ?>"
                                 alt="<?= $itemImage['imageNom'] ?>"
                                 id="idimage<?= $key+1 ?>"
                                 style="max-height:40px;" class="img-thumbnail img-fluid tour-en-blanc resiez-auto" />
                            <?php
                        }
                        // FIN BOUCLE sur la liste des images / animal -------------------------------- ENDDO2
                        ?>                                                                            
                    </td>
                </tr>
                <?php
            }
            // FIN BOUCLE sur la liste des animaux ---------------------------------------------------- ENDDO1
            ?>
        </tbody>
    </table>
    <?php
    }else{
        echo "La liste est vide!";
    }
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