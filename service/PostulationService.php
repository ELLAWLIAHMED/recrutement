<?php

include_once 'beans/Postulation.php';
include_once 'Connexion/Connexion.php';
include_once 'dao/IDao.php';
class PostulationService {
 private $connexion;

    function __construct() {
        $this->connexion = new Connexion();
    }

    public function create($cin,$id,$etat) {
        $query = "INSERT INTO postulation VALUES (?,?,CURRENT_DATE(),?,NULL)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($cin,$id,$etat)) or die('Error');
    }

    public function delete($cin,$id) {
        $query = "DELETE FROM postulation WHERE cin = ? and IdConcour=?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($cin,$id)) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from postulation";
        $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
    public function findEtat($id,$cin) {
        $query = "select etat from postulation where IdConcour=? and cin=?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id,$cin));
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }



     public function findBycin($cin) {
        $query = "select * from postulation where cin =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($cin));
        $res = $req->fetch(PDO::FETCH_OBJ);
        return $res;
    }
    public function findForMembre($concours)
    {
        $query = "select candidat.cin , nomFrancais , prenomFrancais , session , postulation.etat , concours.type , nbrPoste from postulation join candidat on postulation.cin = candidat.cin join concours on postulation.IdConcour = concours.id where postulation.IdConcour =".$concours." and valide = 1";
        $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }

  }


    ?>
