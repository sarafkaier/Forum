<?php
require 'modele/Forum.php';

$forum_update = new Forum($_GET['id']);

if ($_POST) {

	$forum_update->setSujet($_POST['sujet']);
	$forum_update->setAuteur($_POST['auteur']);
	$forum_update->setTitre($_POST['titre']);
	$forum_update->setMessage($_POST['message']);
	$forum_update->setTopic($_POST['topic']);
	$forum_update->setPost($_POST['post']);
	$forum_update->setDate($_POST['date']);

	$forum_update->update();

	header('location:read.php');
}
require 'vue/update.php';
