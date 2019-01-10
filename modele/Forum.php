<?php
include 'MyPDO.php';

class Forum {

  private $id;
  private $sujet;
  private $auteur;
  private $titre;
  private $message;
  private $topic;
  private $post;
  private $date;
  public $bd;

  public function __construct($id = null) {

    $this->bd = new MyPDO();

    $query = "SELECT * FROM forum WHERE id_forum=".$id;

    if ($result = $this->bd->query($query)) {

     while ($row = $result->fetch()) {

        $this->id = $row[0];
        $this->sujet = $row[1];
        $this->auteur = $row[2];
        $this->titre = $row[3];
        $this->message = $row[4];
        $this->topic = $row[5];
        $this->post = $row[6];
        $this->date = $row[7];

      }
    }
  }

  public function getId() { return $this->id; }

  public function getSujet() { return $this->sujet; }
  public function setSujet($sujet) { $this->sujet = $sujet; }

  public function getAuteur() { return $this->auteur; }
  public function setAuteur($auteur) { $this->auteur = $auteur; }

  public function getTitre() { return $this->titre;}
  public function setTitre($titre) { $this->titre = $titre; }

  public function getMessage() { return $this->message; }
  public function setMessage($message) { $this->message = $message; }

  public function getTopic() { return $this->topic; }
  public function setTopic($topic) { $this->topic = $topic; }

  public function getPost() { return $this->post; }
  public function setPost($post) { $this->post = $post; }

  public function getDate() { return $this->date;}
  public function setDate($date) { $this->date = $date; }


  public function create() {
    /* Crée une requête préparée pour insérer*/
    $query = "INSERT INTO forum (sujet, auteur, titre, message, topic, post, date) VALUES (:sujet,:auteur,:titre,:message,:topic,:post,:date)";
    $req = $this->bd->prepare($query);

    /* Exécute la requête */
    $req->execute(array(
      ':sujet' => $this->sujet,
      ':auteur' => $this->auteur,
      ':titre' => $this->titre,
      ':message'=> $this->message,
      ':topic'=> $this->topic,
      ':post'=> $this->post,
      ':date' => $this->date
    ));
  }

  public static function readAll() {
    $bd = new MyPDO();
    $query = "SELECT * FROM forum";
    $req = $bd->query($query);
    return $req->fetchAll(PDO::FETCH_OBJ);
  }

  public function update() {
    $query = "UPDATE forum SET sujet =:sujet, auteur=:auteur, titre =:titre, message =:message, topic=:topic, post=:post, date=:date WHERE id_forum= :id_forum";
    $req = $this->bd->prepare($query);
    $req->execute(array(
      ':id_forum' => $this->id,
      ':sujet' => $this->sujet,
      ':auteur' => $this->auteur,
      ':titre' => $this->titre,
      ':message'=> $this->message,
      ':topic'=> $this->topic,
      ':post'=> $this->post,
      ':date' => $this->date
    ));
  }

  public function delete() {
    $query = "DELETE FROM forum WHERE id_forum= :id_forum";
     $req = $this->bd->prepare($query);
     $req->execute(array(
      ':id_forum' => $this->id));
  }

  public static function readOne($a) {
      $bd = new MyPDO();
      $query = "SELECT * FROM forum WHERE id_forum=".$a;
      $req = $bd->query($query);
      $aForum = $req->fetchAll(PDO::FETCH_CLASS, __CLASS__);
      return $aForum;
  }
}

?>
