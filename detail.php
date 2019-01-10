<?php
require_once 'modele/Forum.php';
require_once 'modele/Commentaire.php';

$b=($_GET['id']);

$forums = Forum::readOne($b);
$commentaire = Commentaire::read($b);


require 'vue/detail.php';
