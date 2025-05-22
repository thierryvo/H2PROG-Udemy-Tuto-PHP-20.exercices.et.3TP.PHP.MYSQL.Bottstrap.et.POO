<?php 
// Définir une class Animal
class Animal{
    // propriétés
    private $id;
    private $idtype;
    private $nom;
    private $age;
    private $sexe;
    //
    private $libelletype;
    private $images = [];
    public static $mesAnimaux = []; // TABLEAU static **
    //
    // CONSTRUCTEUR
    public function __construct($id, $idtype, $nom, $age, $sexe, $libelletype, $images){
        $this->id = $id;
        $this->idtype = $idtype;
        $this->nom = $nom;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->libelletype = $libelletype;
        $this->images = $images;
        //
        // je m'ajoute moi-même dans le TABLEAUX static
        self::$mesAnimaux[] = $this;
    }
    //
    // --------------------------- MEHODES --------------------------------------------
    // getters ------------------------------------------------------------------------
    public function getId() { return $this->id; }
    public function getIdType() { return $this->idtype; }
    public function getNom() { return $this->nom; }
    public function getAge() { return $this->age; }
    public function getSexe() { return $this->sexe; }
    public function getLibelleType() { return $this->libelletype; }
    public function getImages() { return $this->images; }
    // setters ------------------------------------------------------------------------
    public function setId($id) {$this->id = $id;}
    public function setIdType($idtype) {$this->idtype = $idtype;}
    public function setNom($nom) {$this->nom = $nom;}
    public function setAge($age) {$this->age = $age;}
    public function setSexe($sexe) {$this->sexe = $sexe;}
    public function setLibelleType($libelletype) {$this->libelletype = $libelletype;}
    public function setImages($images) {$this->images = $images;}
    // count -------------------------------------------------------------------------
    public static function countAnimal() {
        // Pour compter les éléments du tableau statict: $mesAnimaux
        $nb = count(self::$mesAnimaux);
        return $nb;
    }       
}
