<?php
require_once 'Forum.php';

class Commentaire extends Forum{

  private $id;
  private $auteur;
  private $message;
  private $idForum;
  public $bd;
 
  public function __construct($id = null) {

    $this->bd = new MyPDO();

    $query = "SELECT * FROM commentaire WHERE id_commentaire=".$id;

    if ($result = $this->bd->query($query)) {
    
     while ($row = $result->fetch()) { 

        $this->id = $row[0];
        $this->auteur = $row[1];
        $this->message = $row[2];
        $this->id_forum = $row[3];
      }
    }
  }

  public function getId() { return $this->id; }

  public function getAuteur() { return $this->auteur; }
  public function setAuteur($auteur) { $this->auteur = $auteur; }

  public function getMessage() { return $this->message;}
  public function setMessage($message) { $this->message = $message; }

  public function getIdForum() { return $this->idForum;}
  public function setIdForum($idForum) { $this->idForum = $idForum; }

  public function create() {
    /* Crée une requête préparée pour insérer*/
    $query = "INSERT INTO commentaire (auteur, message,id_forum) VALUES (:auteur,:message,:id_forum)";
    $req = $this->bd->prepare($query);

    /* Exécute la requête */
    $req->execute(array(
      ':auteur' => $this->auteur,
      ':message' => $this->message,
      ':id_forum' => $this->idForum
    ));
  }

  public static function read($idf) { 
    $bd = new MyPDO();
    $query = "SELECT * FROM `commentaire` WHERE `id_forum`=".$idf;
    $req = $bd->query($query);
    return $req->fetchAll(PDO::FETCH_OBJ);
  }

  public function update() {
    $query = "UPDATE commentaire SET auteur = :auteur, message =:message WHERE id_commentaire= :id_commentaire";
    $req = $this->bd->prepare($query);
    $req->execute(array(
      ':id_commentaire' => $this->id,
      ':auteur' => $this->auteur,
      ':message' => $this->message
    )); 
  }

  public function delete() {
    $query = "DELETE FROM commentaire WHERE id_commentaire= :id_commentaire";
     $req = $this->bd->prepare($query);
     $req->execute(array(
      ':id_commentaire' => $this->id)); 
  }
}

?>

