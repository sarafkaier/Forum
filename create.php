<?php 

require 'modele/Forum.php';

$forum = new Forum(1);

$forum_create = new Forum();
if ($_POST) {
	$forum_create->setSujet($_POST['sujet']);
	$forum_create->setTitre($_POST['titre']);
	$forum_create->setAuteur($_POST['auteur']);
	$forum_create->setMessage($_POST['message']);
	$forum_create->setTopic($_POST['topic']);
	$forum_create->setPost($_POST['post']);
	$forum_create->setDate($_POST['date']);

	$forum_create->create();

	header('location:read.php');
}

require 'vue/create.php';

