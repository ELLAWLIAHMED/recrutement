<?php


class Connexion {
    private $connexion;

    public function __construct() {
        $host = 'localhost';
        $dbname = 'Erecrutement';
        $login = 'root';
        $password = 'root';
        try {
            $this->connexion = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);
            $this->connexion->query("SET NAMES UTF8");
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    function __destruct(){}

    function getConnexion() {
        return $this->connexion;
    }
}
