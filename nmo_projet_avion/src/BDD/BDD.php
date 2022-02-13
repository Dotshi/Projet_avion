<?php

class BDD
{
    private $bdd;

    public function getBdd(){
        $bdd = new PDO('mysql:host=localhost;port=3306;dbname=vol_avion_nm;charset=utf8', 'root', '');
        return$bdd;
    }
}