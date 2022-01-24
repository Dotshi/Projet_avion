<?php
session_start();
$bdd = new PDO('mysql:host=localhost3306;dbname=nmo_projet_avion;charset=utf8', 'root', '');
$req = $bdd->prepare( 'INSERT INTO vol ( date_depart, heure_depart, heure_arrivee, ref_pilote, ref_avion) 
VALUES (:date_depart,:heure_depart,:heure_arrivee,:ref_pilote,:ref_avion)');
$req->execute(array(
    'date_depart'=> $_POST['date_depart'],
    'heure_depart' => $_POST['heure_depart'],
    'heure_arrivee' => $_POST['heure_arrivee'],
    'ref_pilote' => $_POST['ref_pilote'],
    'ref_avion' => $_POST['ref_avion'],
));
    $res= $req -> fetchAll();
if($res) {
    $_SESSION['date_depart'] = $res['date_depart'];
    $_SESSION['heure_depart'] = $res['heure_depart'];
    $_SESSION['heure_arrivee'] = $res['heure_arrivee'];
    $_SESSION['ref_pilote'] = $res['ref_pilote'];
    $_SESSION['ref_avion'] = $res['ref_avion'];
    echo "Votre réservation a bien été éfféctuer";
    header('Location: index.html');
}
else {
    header('Location: index.html');
}
?>
