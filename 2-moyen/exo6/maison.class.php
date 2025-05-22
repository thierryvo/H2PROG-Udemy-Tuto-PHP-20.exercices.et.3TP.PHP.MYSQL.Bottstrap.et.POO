<?php 
// Définir une class Maison
class Maison{
    // propriétés static: pour ID
    // utilisation de la static avec: self
    private static $increment = 0 ;

    // propriétés
    private $id;
    private $dateCreation;
    private $nombreChambre;
    private $surface;
    //
    // CONSTRUCTEUR
    public function __construct($dateCreation, $nombreChambre, $surface){
        // GESTION de l'ID Automatique en static -- avec self
        self::$increment++; // + 1 à l'ID
        $this->id = self::$increment;

        $this->dateCreation = $dateCreation;
        $this->nombreChambre = $nombreChambre;
        $this->surface = $surface;
    }
    //
    // --------------------------- MEHODES --------------------------------------------
    // getters ------------------------------------------------------------------------
    public function getId() { return $this->id; }
    public function getDateCreation() { return $this->dateCreation; }
    public function getNombreChambre() { return $this->nombreChambre; }
    public function getSurface() { return $this->surface; }
}