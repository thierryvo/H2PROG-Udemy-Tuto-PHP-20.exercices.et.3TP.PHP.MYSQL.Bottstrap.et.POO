<?php 

class PDOconnexion {
    // propriétés
    private const HOST_NAME = "localhost";
    private const DB_NAME = "animaux";
    private const DB_USER_NAME = "root";
    private const DB_PASSWORD = "";
    private const DB_PORT=3307;

    // static pour conserver une instance de PDO (Une seule instance pour tout le projet)
    private static $pdo = null;
    //
    //
    // METHODES ========================================================================
    // getPDO --------------------------------------------------------------------------
    // Récupérer l'instance unique de pdo (pour pouvoir l'utilisert)
    // METHODE static accéssible depuis la class PDOconnexion
    public static function getPDO(){
        if(is_null(self::$pdo)){
            // Options de connexion
            $options = [
                PDO::ATTR_EMULATE_PREPARES   => false,                  // Désactiver le mode d'émulation pour les "vraies" instructions préparées
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Désactiver les erreurs sous forme d'exceptions
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Faire en sorte que la récupération par défaut soit un tableau associatif
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',       // utf8 : caractères spéciaux en Français accents et ç
            ];            
            // pdo sous try catch
            try {
                // Instancier l'Objet PDO de connexion
                self::$pdo = new PDO(
                    "mysql:host=".self::HOST_NAME.";port=".self::DB_PORT.";dbname=".self::DB_NAME,
                    self::DB_USER_NAME,
                    self::DB_PASSWORD,
                    $options
                );
            } catch (PDOException $e) {
                // ARRET exécution par die avec un message
                $msg = "Erreur de connexion mysql, sqlmsg e = " .$e->getMessage();
                die($msg);                
            }
        }//FINSI pdo null
        //
        // retourne pdo
        return self::$pdo;
    }
}