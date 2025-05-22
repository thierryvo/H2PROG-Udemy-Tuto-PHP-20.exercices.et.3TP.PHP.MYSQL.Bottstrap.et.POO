<!-- MENU NAVBAR -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <?php
    // Un tableau pour détailler chaque exo facile
    $tabExo = []; // exo facile de 1 à 20
    $tabExo[] = "indice 0: les exo commence à 1!";
    $tabExo[] = "Variables: permutation avec variable auxiliaire."; // exo 1
    $tabExo[] = "Variables: utilisation condition ternaire    (!s_homme) ? ' et c est une femme' : ' et c est un homme' ."; // exo 2
    $tabExo[] = "Variables: utilisation random rand & condition if elseif else."; // exo 3
    $tabExo[] = "Variables: utilisation random rand & valeur Absolue abs."; // exo 4
    $tabExo[] = "BOUCLE: utilisation random & boucle for - table de multiplication."; // exo 5
    $tabExo[] = "BOUCLE: utilisation random & boucle for - Nombres premier."; // exo 6
    $tabExo[] = "BOUCLE: utilisation random, switch case break - Les mois de l année."; // exo 7
    $tabExo[] = "BOUCLE: utilisation random, BOUCLE WHILE Condition."; // exo 8
    $tabExo[] = "FONCTION: utilisation Modulo 2 % 2 et Fonction isPair, et Ternaire."; // exo 9
    $tabExo[] = "FONCTION: utilisation str_replace,  mb_strlen, mb_str_split, implode - Supprimer les Voyelles."; // exo 10
    $tabExo[] = "BOUCLE: utilisation foreach key value - Initialisation TABLEAUX."; // exo 11
    $tabExo[] = "BOUCLE: utilisation foreach key value - Calcul de la Moyenne."; // exo 12
    $tabExo[] = "BOUCLE: utilisation foreach key value - Fonction Calcul de la Moyenne."; // exo 13
    $tabExo[] = "BOUCLE: utilisation foreach key value, foraeach, TABLEAU de TABLEAU - Fonction Calcul de la Moyenne."; // exo 14
    $tabExo[] = "TABLEAUX ASSOCIATIF: Déclaration & utilisation TABLEAU Associatifs."; // exo 15
    $tabExo[] = "TABLEAUX ASSOCIATIF: utilisation TABLEAU de TABLEAU Associatifs avec foreach key value."; // exo 16
    $tabExo[] = "TABLEAUX ASSOCIATIF: utilisation TABLEAU de TABLEAU Associatifs contenant un TABLEAU de Notes avec foreach key value."; // exo 17
    $tabExo[] = "FORMULAIRE & METHODE GET: SAISIE pseudo, age."; // exo 18
    $tabExo[] = "FORMULAIRE & METHODE POST: SAISIE pseudo, age, chiffre - Fonction isPair."; // exo 19
    $tabExo[] = "FORMULAIRE & METHODE POST: SAISIE 3 notes - Calcul de la moyenne."; // exo 20
    // Un tableau pour détailler chaque exo Moyen
    $tab2Exo = []; // exo moyen de 1 à 7
    $tab2Exo[] = "indice 0: les exo commence à 1!";
    $tab2Exo[] = "TABLEAU: deux dimensions - TABLE DE MULTIPLICATION."; // exo 1
    $tab2Exo[] = "TABLEAU: deux tableaux centré - et un fichier de fonctions: fonctions.php."; // exo 2
    $tab2Exo[] = "TABLEAU: tableaux de tableaux associatifs d'animaux  - Animalerie - Avec: Tri url Méthode GET."; // exo 3
    $tab2Exo[] = "OBJET: tableaux de tableaux associatifs d'animaux  - Animalerie - Avec: Tri url Méthode GET."; // exo 4
    $tab2Exo[] = "OBJET: tableau d'OBJET LIVRE - private & getters - Tri en POST"; // exo 5
    $tab2Exo[] = "OBJET: Class Maison - attribur statique pour gérer les ID Maison"; // exo 6
    $tab2Exo[] = "OBJET: Manipuler deux class Player & Arme - Sachant qu'un player possède une arme  !!!BUG!!!"; // exo 7
    // Un tableau pour détailler cas pratique - 1 Armes
    $tabCas1 = []; // cas pratique 1 -  les Armes
    $tabCas1[] = "indice 0: les exo commence à 1!";
    $tabCas1[] = "Les Variables"; // partie1
    $tabCas1[] = "TABLEAUX & BOUCLES"; // partie2
    $tabCas1[] = "TABLEAUX ASSOCIATIF - Les armes."; // partie3
    $tabCas1[] = "Programmation Orientée Objet (POO) - Les armes - (Class Arme)."; // partie4
    $tabCas1[] = "Programmation Orientée Objet (POO) - Les armes - (Class Arme) *Amélioration*."; // partie5
    $tabCas1[] = "POO Gestion d'images en fonction du level - Les armes - (Class Arme)."; // partie6
    $tabCas1[] = "POO Liste déroulante et Formulaire - Les armes Class Arme."; // partie7
    $tabCas1[] = "POO Liste déroulante et Formulaire + SESSION - Les armes Class Arme."; // partie8
    $tabCas1[] = "POO Liste déroulante et Formulaire + SESSION + str_replace - Les armes Class Arme."; // partie9
    ?>
    <!-- accueil -->
    <a class="navbar-brand" href="../../global/accueil/index.php">accueil</a>
    <!-- bouton vizzare si reduction -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <!-- facile dropdown-list : 20 exo facile -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Facile
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <!-- BOUCLE sur 20 exo facile -->
            <?php for($i=1;$i <= 20;$i++) : ?>
                <!-- LIEN Dynamique vers l'exo                    No i -->
                <a class="dropdown-item" href="../../1-facile/exo<?=$i?>/index.php">exo<?=$i?> : <?= $tabExo[$i] ?></a>
            <?php endfor; ?>
            </div>
        </li>
        <!-- moyen dropdown-list : 7 exo moyen -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Moyen
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <!-- BOUCLE sur 7 exo moyens -->
            <?php for($ii=1;$ii <= 7;$ii++) : ?>
                <!-- LIEN Dynamique vers l'exo                   No ii                                $tab2Exo[$ii] -->
                <a class="dropdown-item" href="../../2-moyen/exo<?=$ii?>/index.php">exo<?=$ii?> : <?= $tab2Exo[$ii] ?></a>
            <?php endfor; ?>
            </div>
        </li>
        
        <!-- armes dropdown-list : 9 parties -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Armes
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <!-- Les 9 exo -->
                <!-- BOUCLE sur 9 partie -->
                <?php for($ii=1;$ii <= 9;$ii++) : ?>
                    <!-- LIEN Dynamique vers l'exo                                     No ii                             $tabCas1[$ii] -->
                    <a class="dropdown-item" href="../../4-cas pratique/1-Armes/partie<?=$ii?>.php">partie<?=$ii?> : <?= $tabCas1[$ii] ?></a>
                <?php endfor; ?>
            </div>
        </li>

        <!-- produits dropdown-list : 1 index -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Produits
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <!-- BOUCLE sur 1 partie -->
                <?php for($ii=1;$ii <= 1;$ii++) : ?>
                    <!-- LIEN Dynamique vers l'exo                      No ii         $tabCas1[$ii] -->
                    <a class="dropdown-item" href="../../4-cas pratique/2-Produits/index.php">index</a>
                <?php endfor; ?>
            </div>
        </li>        

        <!-- animaux dropdown-list : 1 index -->
        <li class="nav-item">
            <a class="nav-link" href="../../4-cas pratique/3-Animaux/index.php">Animaux</a>
        </li>  

    </ul>
    </div>
</nav>