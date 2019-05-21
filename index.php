<?php

require "modeles/Projet.class.php";

require "vues/VueProjet.class.php";
require "vues/VueSite.class.php";
require "vues/VueOutils.class.php";
require "vues/VueReglages.class.php";

require "controleur/Controleur.class.php";

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="medias/favicon.png">
    <link rel="apple-touch-icon" href="medias/favicon.png">

    <link href="css/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&amp;display=swap" rel="stylesheet">
</head>
<body>
    <?php

    try {

        $oCtrl = new Controleur();

        $oCtrl->gererSite();

    } catch (Exception $oException) {
        echo "<p>" . $oException->getMessage() . "<p>";
    }

    ?>
</body>
</html>
