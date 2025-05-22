<?php 
require_once("_PDO.connexion.class.php");
// Définir une class AnimalDAO   (Data Access Oblect)
// C'est une classe qui ne contient que des fonctions static accésible de n'Impoute ou.
class AnimalDAO{
    //
    // --------------------------- MEHODES STATIC -------------------------------------
    // getAnimauxBD -------------------------------------------------------------------
    public static function getAnimauxBD() {
        // lecture tous les animaux
        $pdo = PDOconnexion::getPDO();
        $sql="
        SELECT idAnimal, nom, age, sexe, idtype
        FROM animal
        ";
        $req = $pdo->prepare($sql);
        $req->execute();
        $animals = $req->fetchAll(PDO::FETCH_ASSOC);
        //
        // RETOUR
        return $animals;
    }

    // getTypeAnimalBD ----------------------------------------------------------------
    public static function getTypeAnimalBD($idAnimal) {
        // Pour 1 animal: on récupère l'information de son type
        $pdo = PDOconnexion::getPDO();
        $sql="
        SELECT     libelletype
        FROM       animal as a
        INNER JOIN type_d_animal as t
        ON         a.idtype = t.idtype
        WHERE      a.idAnimal = :idAnimal
        ";
        $req = $pdo->prepare($sql);
        $req->bindValue(
            ":idAnimal",$idAnimal,PDO::PARAM_INT
        );
        $req->execute();
        //
        // RETOUR: un ENREG
        $tab = $req->fetch(PDO::FETCH_ASSOC);
        return (string)$tab["libelletype"];
    }

    // getImagesAnimalBD --------------------------------------------------------------
    public static function getImagesAnimalBD($idAnimal) {
        // Pour 1 animal: on récupère toutes ces images qui lui sont associés
        $pdo = PDOconnexion::getPDO();
        $sql="
        SELECT     imageNom, imageChemin
        FROM       image as i
        INNER JOIN image_animal as ia
        ON         i.idImage = ia.idImage
        WHERE      ia.idAnimal = :idAnimal
        ";
        $req = $pdo->prepare($sql);
        $req->bindValue(
            ":idAnimal",$idAnimal,PDO::PARAM_INT
        );
        $req->execute();
        //
        // RETOUR: plusieurs ENREG ( deux zones)
        $tab = $req->fetchall(PDO::FETCH_ASSOC);
        return $tab;
    }      
}