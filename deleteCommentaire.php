<?php

require_once 'modele/Commentaire.php';

$commentaire_delete = new Commentaire($_GET['id']);

$commentaire_delete->delete();

header('location:detail.php?id='.$_GET['id_forum']);	
 
require 'vue/deleteCommentaire.php';