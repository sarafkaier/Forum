<?php
require 'modele/Commentaire.php';

$commentaire_update = new Commentaire($_GET['id']);


if ($_POST) {

	$commentaire_update->setAuteur($_POST['auteur']);
	$commentaire_update->setMessage($_POST['message']);

	$commentaire_update->update();
	
	header('location:detail.php?id='.$_GET['id_forum']);
}
require 'vue/updateCommentaire.php';