<?php
require_once '../Modele/Vol.php';
$insert = new Vol(array(
    'DateDepart'=>$_POST['date_depart'],
    'HeureDepart'=>$_POST['heure_depart'],
    'HeureArrivee'=>$_POST['heure_arrivee'],
    'RefPilote'=>$_POST['ref_pilote'],
    'RefAvion'=>$_POST['ref_avion'],
));

$insert->setInsert();
header('Location: ../Vue/index.html');