<?php
require 'modele/Forum.php';

$forum_delete = new Forum($_GET['id']);

$forum_delete->delete();
header('location:read.php');	
 
require 'vue/delete.php';