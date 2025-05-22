<?php 
/* ===================================================================== */
/*                            LES FONCTION                               */
/* ===================================================================== */
// calculerMoyenne -------------------------------------------------------
function calculerMoyenne($tableau){
    // ENTREE: $tableau  = [11,14,10,4,20,8,2]
    // PARCOURS du tableau: des notes --------------
    $resultat = 0;
    foreach($tableau as $item){
        // Cumul: $resultat = $resultat + $item
        $resultat += $item;        
    }
    $laMoyenne = $resultat / count($tableau);
    return $laMoyenne;
}

// calculerMoyenne -------------------------------------------------------
function estTableauPair($tableau){
    // ENTREE: $tableau  = [11,14,10,4,20,8,2]
    // PARCOURS du tableau: des notes ---------------
    $pair = null;
    foreach($tableau as $item){
        // test la valeur: Elle doit être pair
        $nombre = $item;
        if($nombre % 2 != 0){
            // ko: Au moins un élément n'est pas pair
            $pair = false;
            return $pair; // break; -----------------
        }
    }
    $pair = true;
    return $pair;
}

// isPair -----------------------------------------------------------------
function isPair($nombre){
    // SI le MODULO 2 d'un nombre est égale à zéro: c'est que c'est PAIR
    // le    modulo   en fait c'est le:  reste de nombre / 2
    $moduloDeux = $nombre % 2; // % c'est le modulo 
    if($moduloDeux == 0){
        // C'est PAIR
        return true;
    }else{
        // C'est IMPAIR
        return false;
    }
}

// afficherTableau -------------------------------------------------------
function afficherTableau($tableau){
    // ENTREE: $tableau  = [[2,3,6,10,20,9,14]
    foreach ($tableau as $key => $valeur) {                
        if($key > 0){ echo " - "; }
        echo $valeur;
    }
}