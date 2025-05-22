<?php 
require "arme.class.php";
// Définir une class Player
class Player{
    // propriétés static: pour ID
    // utilisation de la static avec: self
    private static $increment = 0 ;

    // propriétés
    private $id;
    private $nom;
    private $force;
    private $pv;
    private $id_arme;
    //
    // CONSTRUCTEUR
    public function __construct(){
        // GESTION de l'ID Automatique en static -- avec self
        self::$increment++; // + 1 à l'ID
        $this->id = self::$increment;

        $this->force = 5;
        $this->pv = 100;
    }
    //
    // --------------------------- MEHODES --------------------------------------------
    // getters ------------------------------------------------------------------------
    public function getId() { return $this->id; }
    public function getNom() { return $this->nom; }
    public function getForce() { return $this->force; }
    public function getPv() { return $this->pv; }
    public function getIdArme() { return $this->id_arme; }
    // setters ------------------------------------------------------------------------
    // Modifier les information, ici: nom & id_arme
    public function setNom($nom){ $this->nom = $nom; }
    public function setIdArme($id_arme){ $this->id_arme = $id_arme; }

    // toString ------------------------------------------------
    public function __toString(){
        //
        // FAIRE le lien avec l'Arme (grace au Static)
        $arme = Arme::recupererArme($this->id_arme);
        // Concaténer le texte txt avec:  .=
        $txt="";
        $txt .= "Nom   : " . $this->nom . "<br/>";
        $txt .= "Force : " . $this->force . "<br/>";
        $txt .= "PV    : " . $this->pv . "<br/>";
        $txt .= "Arme  : " . $this->id_arme . "<br/>";
        $txt .= $arme . "<br/>";
        return $txt;
    }
}