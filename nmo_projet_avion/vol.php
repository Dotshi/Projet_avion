<?php

class vol
{
private $id_vol;
private $date_depart;
private $heure_depart;
private $heure_arrivee;
private $ref_pilote;
private $ref_avion;

public function getid_vol(){
    return $this->id_vol;
}
public function getdate_depart(){
    return $this->date_depart;
}
public function getheure_depart(){
    return $this->heure_depart;
}
public function getheure_arrivee(){
    return $this->heure_arrivee;
}
public function getref_pilote(){
    return $this->ref_pilote;
}
public function getref_avion(){
    return $this->ref_avion;
}

public function __construct()
{
    $bdd = new PDO('mysql:host=localhost3306;dbname=nmo_projet_avion;charset=utf8', 'root', '');
    $req = $bdd->prepare('INSERT INTO vol ( date_depart, heure_depart, heure_arrivee, ref_pilote, ref_avion)
VALUES (:date_depart,:heure_depart,:heure_arrivee,:ref_pilote,:ref_avion)');
    $req->execute(array(
        'date_depart' => $_POST['date_depart'],
        'heure_depart' => $_POST['heure_depart'],
        'heure_arrivee' => $_POST['heure_arrivee'],
        'ref_pilote' => $_POST['ref_pilote'],
        'ref_avion' => $_POST['ref_avion'],
    ));
}
}