<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- LIEN CDN Bootstrap 4.3.1 -->   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- inclure mon style à moi à toutes les PAGES -->
    <!-- css du projet                     ATTENTION: c'est par rapport à la position de la PAGE où se trouve le head-->
    <link rel="stylesheet" type="text/css" href="../../global/common/monstyle.css">


    <!-- TITRE  du volet -->
    <title>Document</title>
</head>
<body>
    <!-- INCLURE le MENU NAVBAR (en haut du body) -->
    <?php require "menu.php" ?>
    <div class="container">
        <!-- TITRE  de la PAGE     sur fond bleue -->
        <h1 class="border border-dark bg-primary rounded-lg text-white p-2 my-2"><?= $titre ?></h1>
        <!-- contenu du site: content  ** le contenu de chaque PAGE viens se placer ici *** -->
        <?= $content ?>
    </div>

    <!-- LIEN CDN script: Toujours à la FIN du body -->
    <!-- LIEN CDN script: JQuery 3.3.1,  popper 1.14.7,   Bootstrap 4.3.1 -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
</body>
</html>