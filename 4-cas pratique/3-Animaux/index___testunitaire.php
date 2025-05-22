<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Les animaux."; //Mettre le nom que vous voulez

// -------------------------------------------------------------------------------------------------------------------- BACK
// tests
//
// *** tets unitaire 03 :: test de la classe AnimalDAO ***

// partie controleur----------------------------------------------------------------CONTROLEUR
require_once("animalDAO.class.php");
require_once("animal.class.php");
$animaux = AnimalDAO::getAnimauxBD();
foreach ($animaux as $key => $animal) {
    // data satellite
    // type animal (libellé)
    // imaages
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
// partie VUE (affichage)------------------------------------------------------------------VUE
// BOUCLE (1) les animaux
foreach (Animal::$mesAnimaux as $key => $animal) {
    # code...
    echo "<b>Clé key = $key, nom : " . $animal->getNom() . ",  age : " . $animal->getAge() . " ans,  type : " . $animal->getLibelleType() . ";</b>";
    echo "<br/>.      Images (n) :<br/>";
    // BOUCLE (2) les images / animal 
    foreach ($animal->getImages() as $no => $itemImage) {
        # code... des images 1 à n
        if($no>0){ echo "<br/>"; }
        echo "{nom: " . $itemImage['imageNom'] . ", chemin: " . $itemImage['imageChemin'] . "}";
    }
    echo "<br/>";
}







echo "<br/><br/>";
//
// *** tets unitaire 02 :: test de la classe Animal ***
// pour tester on tente de parcourir le tableaux static d'Animaux => Animal::$mesAnimaux
// $o1Animal = new Animal(1,"laika","8",false,"1","");
// $o2Animal = new Animal(2,"eos","6",false,"1","");
// $o2Animal = new Animal(2,"athenos","1",true,"1","");
// foreach (Animal::$mesAnimaux as $key => $animal) {
//     # code...
//     echo "Clé key = $key, nom : " . $animal->getNom() . ",  age : " . $animal->getAge() . " ans." . "<br/>";
// }


// *** tets unitaire 01 :: test de connexion BDD  ***
// require_once("_PDO.connexion.class.php");
// $pdo = PDOconnexion::getPDO();
// $sql="
// SELECT idAnimal, nom, age, sexe, libelletype
// FROM animal as a, type_d_animal as t
// WHERE a.idtype = t.idtype
// ";
// $req = $pdo->prepare($sql);
// $req->execute();
// $animals = $req->fetchAll(PDO::FETCH_ASSOC);

// echo "<br/>Le animaux : <br/>";
// var_dump($animals);


// -------------------------------------------------------------------------------------------------------------------- FRONT
?>
<!-- Mettre ici le code html -->
<div class="contenu-d-affichage">
</div>

<?php
/***********************************************************************
 * NE PAS MODIFIER: PERMET d INCLURE LE MENU ET LE TEMPLATE
 ***********************************************************************/
// VIDER le buffer pour: Mettre le contenu $content dedans : le template
$content = ob_get_clean();
require "../../global/common/template.php";
?>