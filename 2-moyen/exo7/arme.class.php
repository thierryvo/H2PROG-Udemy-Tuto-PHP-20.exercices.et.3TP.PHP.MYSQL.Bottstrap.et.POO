<?php
class Arme{
    // propriétés static: pour ID
    // utilisation de la static avec: self
    private static int $increment = 0 ;
    private static $armes = [];

    // propriétés
    private int $id;
    private $nom;
    private $nombreDegat;
    //
    // CONSTRUCTEUR
    public function __construct($nom, $nombreDegat){
        // GESTION de l'ID Automatique en static -- avec self
        self::$increment++; // + 1 à l'ID
        $this->id = self::$increment;

        $this->nom = $nom;
        $this->nombreDegat = $nombreDegat;
        //
        // TABLEAUX d'armes -- A chaque fois que je me créé une Arme (moi-même),
        //                     Je m'alimente moi même dans un TABLEAUX en: Ajoutant une case
        self::$armes[] = $this;
    }
    //
    // --------------------------- MEHODES --------------------------------------------
    // getters ------------------------------------------------------------------------
    public function getId() { return $this->id; }
    public function getNom() { return $this->nom; }
    public function getNombreDegat() { return $this->nombreDegat; }
    // setters ------------------------------------------------------------------------
    public function setNom($nom){ $this->nom = $nom; }
    public function setNombreDegat($nombreDegat){ $this->nombreDegat = $nombreDegat; }


    // toString ------------------------------------------------
    public function __toString(){
        // Concaténer le texte txt avec:  .=
        $txt="";
        $txt .= "ID    : " . $this->id . "<br/>";
        $txt .= "Nom   : " . $this->nom . "<br/>";
        $txt .= "Dégat : " . $this->nombreDegat . "<br/>";
        return $txt;
    }

    // recupererArme -------------------------------------------
    public static function recupererArme($id){
        // static = accéssible depuis la class Arme  (moi-même)
        //
        // On parcours le TABLEAUX $armes pour retouver:
        // l'element arme qui corespond à l'ID en paramètre
        foreach(self::$armes as $itemArme){
            // RQ:
            if(!is_object($itemArme)) { continue; } // Skip non-object rows

            // Est-ce-que l'ID de l'arme est = à id en paramètre
            if($id === $itemArme->id){
                return $itemArme;
            }
        }
        //
        // NON trouvé:
        return null;
    }
    
}