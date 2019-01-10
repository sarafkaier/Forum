<?php 
require 'modele/Commentaire.php';

$commentaire = new Commentaire(1);

$commentaire_create = new Commentaire();

if ($_POST) {
	$commentaire_create->setAuteur($_POST['auteur']);
	$commentaire_create->setMessage($_POST['message']);
	$commentaire_create->setIdForum($_GET['id_forum']);

	$commentaire_create->create();

	header('location:detail.php?id='.$_GET['id_forum']);
}

require 'vue/createCommentaire.php';

