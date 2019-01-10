<html>
<head>
	<title>Sujets</title>
	<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body style="background-image: url(vue/img/fond.jpg)">
	<div class="container">
		<h1 style="text-align: center; margin-bottom: 25px; margin-top: 10px;">Sujet</h1>
		<div class="card col-md-10 offset-1">
			<div class="row">
			<section class="panel panel-info"><hr>
				<header class="panel-heading"></header>
				<?php foreach ($forums as $sujets) : ?>
				<section class="row panel-body">
					<section class="col-md-6 ">
						<h4><?= $sujets->getSujet() ?></h4><hr style="width: 500px;">
						<h6><?= $sujets->getMessage() ?> </h6>
				</section>
				<section class="col-md-4" style="padding-right: 100px;">
					<ul id="post-topic">
						<li class="list-unstyled"> Topics: <?= $sujets->getTopic() ?></li>
						<li class="list-unstyled"> Posts: <?= $sujets->getPost() ?></li>
					</ul>
				</section>
				<section class="col-md-2" style="padding-right: 20px;">
					<h4><a href="#"><?= $sujets->getTitre() ?></a></h4><hr>
					<a href="#"><?= $sujets->getAuteur() ?></a><br>
					<a href="#"><?= $sujets->getDate() ?></a>
				</section>
			</section>
			<hr>
			<?php endforeach; ?>
		</div>
	</div><br>
	<a class="btn btn-primary btn-sm offset-1" href="read.php">Retour aux sujets</a><br><br>
	<br>
	<div class="container">
		<h3 style="text-align: center; margin-bottom: 25px; margin-top: 10px;">Commentaires</h3>
		<div class="card col-md-10 offset-1">
			<div class="row">
			<section class="panel panel-info">	
				<header class="panel-heading"></header>
				<?php foreach ($commentaire as $sujeta) : ?>
				<section class="row panel-body">
					<section class="col-md-10"><hr style="width: 900px;">
						<h6 class="offset-6"><?= $sujeta->auteur ?></h6><hr style="width: 900px;">
						<h6><?= $sujeta->message ?> </h6>
				</section>
				<section style="padding-left:750px;">
					<tbody>
						<tr>
							<td><a class="btn btn-success btn-sm" href="updateCommentaire.php?id=<?= $sujeta->id_commentaire ?>&id_forum=<?= $_GET['id'] ?>">Modifier</a></td>
							<td><a class="btn btn-danger btn-sm" href="deleteCommentaire.php?id=<?= $sujeta->id_commentaire ?>&id_forum=<?= $_GET['id'] ?>" onclick="return confirm('Voulez vous vraiment supprimer ?');">Supprimer</a></td>
						</tr>
					</tbody>
				</section>
			</section>
			<?php endforeach; ?>
			<hr>
		</div>
	</div><br>
	<a class="btn btn-warning btn-sm offset-1" href="createCommentaire.php?id_forum=<?= $_GET['id'] ?>">Ajouter un commentaire</a><br><br>
</body>
</html>
