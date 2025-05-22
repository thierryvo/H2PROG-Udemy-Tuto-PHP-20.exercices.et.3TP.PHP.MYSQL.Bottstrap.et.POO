<?php 
// Démarrer un BUFFER: pour mettre le contenu content
ob_start(); 

// CONTENU
?>
<!-- mettre ici le code -->
<!-- http://localhost/H2PROG/Udemy/programme/4-cas%20pratique/3-Animaux/index.php -->
Mon propre lien: http://localhost/H2PROG/Udemy/programme/4-cas%20pratique/3-Animaux/index.php


<?php
// VIDER le buffer pour: Mettre le contenu $content dedans : le template
$titre = "Mon super site d'exercice";
$content = ob_get_clean();
require "../common/template.php";
?>
