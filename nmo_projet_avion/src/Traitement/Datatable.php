<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Place réservé</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<body>
<div class="container">
    <h4 class="text-center">Place réservé</h4>
    <table id="table_id" class="display"></table>
        <thead>
        <tr>
            <th>Date Depart</th>
            <th>Heure Depart</th>
            <th>Heure Arrivee</th>
            <th>Pilote</th>
            <th>Avion</th>
        </tr>
        </thead>
    <tbody>
    <?php

    require_once '../modele/Vol.php';
    $bdd = new bdd();
    foreach ($bdd->$AfficherVol() as $values){

    ?>

    <tr>
        <td><?php echo $values['date_depart']?></td>
        <td><?php echo $values['heure_depart']?></td>
        <td><?php echo $values['date_arrivee']?></td>
        <td><?php echo $values['ref_pilot']?></td>
        <td><?php echo $values['ref_avion']?></td>
    </tr>
    <?php } ?>
    </tbody>
    <script>$(document).ready(function() {
    $(#table_id). Datatable();
    });
    </script>
</body>
</html>