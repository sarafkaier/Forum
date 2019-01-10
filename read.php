<?php
require 'modele/Forum.php';

$forum = Forum::readAll();

require 'vue/read.php';