<html>
<head>
	<title>Forum</title>
	<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script>
	function ConfirmDelete(){
		if (confirm("Voulez vous vraiment supprimer ? ")){
			return true;
		}
    else {
			return false;
		}
	}
	</script>
</head>
<body style="background-image: url(vue/img/fond.jpg)">
	<div class="container">
		<h1 style="text-align: center; margin-bottom: 25px; margin-top: 10px;">Forum</h1>
			<a class="btn btn-warning btn-sm offset-1" href="create.php">Créer un sujet</a><br><br>
		<div class="card col-md-10 offset-1" style="background-color: #fafafa;">
			<div class="row">
			<section class="panel panel-info"><hr>
				<header class="panel-heading"></header>
				<?php foreach ($forum as $sujet) : ?>
				<section class="row panel-body">
					<section class="col-md-6 ">
					<h4><?= $sujet->sujet ?></h4><hr style="width: 500px;">
					<h6><?= $sujet->message ?> </h6>
				</section>
				<section class="col-md-4" style="padding-right: 100px;">
					<ul id="post-topic">
						<li class="list-unstyled"> Topics: <?= $sujet->topic ?></li>
						<li class="list-unstyled"> Posts: <?= $sujet->post ?></li>
					</ul>
				</section>
				<section class="col-md-2" style="padding-right: 20px;">
					<h4><a href="#"><?= $sujet->titre ?></a></h4><hr>
					<a href="#"><?= $sujet->auteur ?></a><br>
					<a href="#"><?= $sujet->date ?></a>
				</section>
				<section style="padding-left:710px;"><br>
					<tbody>
						<tr>
							<td><a class="btn btn-info btn-sm" href="detail.php?id=<?= $sujet->id_forum ?>">Detail</a></td>
							<td><a class="btn btn-success btn-sm" href="update.php?id=<?= $sujet->id_forum ?>">Modifier</a></td>
							<td><a class="btn btn-danger btn-sm" href="delete.php?id=<?= $sujet->id_forum ?>" onclick="return ConfirmDelete();">Supprimer</a></td>
						</tr>
					</tbody>
				</section>
			</section>
			<hr><hr>
			<?php endforeach; ?>
		</div>
	</div>
</body>
</html>
