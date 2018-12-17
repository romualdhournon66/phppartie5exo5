<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 5 exercice 5</title>
    </head>
    <body>
        <div class="container" id="page-top">
            <div class="row">
                <div class="col-xl-12">
                    <h1 align="center">PHP Partie 5 exercice 5</h1>
                    <p align="center">Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.</p>
                </div>
            </div>
            <div align="center">
                <?php
                $departement = array(
                    '02' => 'Aisne',
                    '59' => 'Nord',
                    '60' => 'Oise',
                    '62' => 'Pas de calais',
                    '80' => 'Somme');
                ?>
                <?php
                foreach($departement as $hautDeFrance => $valeur){
                    $array = $hautDeFrance.' '.$valeur;
                ?>
                <p><b><?= $array; ?></b></p>
                <?php } ?>
            </div>
        </div>
    </body>
</html>

