<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); //NE PAS MODIFIER 
$titre = "Un catalogue produit."; //Mettre le nom que vous voulez
require_once("_connexiondb.php");

// -------------------------------------------------------------------------------------------------------------------- BACK
// test de connexion BDD
$sql="
SELECT idcours, libelle, description, imageChemin, imageNom, libelletype
FROM cours as c, type_de_cours as t
WHERE c.idtype = t.idtype
";
$req = $pdo->prepare($sql);
$req->execute();
$cours = $req->fetchAll(PDO::FETCH_ASSOC);


// -------------------------------------------------------------------------------------------------------------------- FRONT
?>
<!-- Mettre ici le code html -->
<div class="contenu-d-affichage">

<?php
// =========== afficher les cours sous forme de CARD ============
// toujours tester SI ce n'est pas vide & si c'est bien un tableau 
if(!empty($cours) && is_array($cours)){
?>
    <!-- row + col-4 : pour avoir 3 CARD sur la même lignes  (4*3 = 12)-->
    <div class="row no-gutters">
        <!-- BOUCLE sur la liste des cours --------------------------------------------------------------------------- DO -->                            
        <?php                
            // BOUCLE sur le tableau articles
            foreach ($cours as $item) {
                ?>
                <!-- (4*3 = 12) 3 colonnes de CARD -->
                <div class="col-4">
                    <!-- CARD: on place notre cours dans une card boostrap 5.3 -->
                    <div class="card m-2">
                        <img src="images/<?= $item['imageChemin'] ?>" class="card-img-top" alt="<?= $item['imageNom'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $item['libelle'] ?></h5>
                            <p class="card-text"><?= $item['description'] ?></p>
                            <a href="#" class="btn btn-primary"><?= $item['libelletype'] ?></a>
                        </div>
                    </div>                    
                </div>             
                <?php                        
            }
            // FIN BOUCLE                        
        ?>
    </div>
<?php
}else{
    echo "La liste des cours est vide!";
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