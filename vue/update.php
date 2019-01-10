<html>
<head>
  <title>Modification</title>
  <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
  <h1 style="text-align: center; margin-bottom: 25px;">Modifier des sujets</h1>
  <div class="card col-md-6 offset-3">
    <form method="post">
      <div class="form-group col-md-6 offset-3" style="margin-bottom: 20px">
        <label>Sujet : </label>
        <input class="form-control" type="text" name="sujet" value="<?= $forum_update->getSujet()?>">
      </div>

      <div class="form-group col-md-6 offset-3" style="margin-bottom: 20px">
        <label>Auteur : </label>
        <input class="form-control" type="text" name="auteur" value="<?= $forum_update->getAuteur()?>">
      </div>

      <div class="form-group col-md-6 offset-3" style="margin-bottom: 20px">
        <label>Titre : </label>
        <input class="form-control" type="text" name="titre" value="<?= $forum_update->getTitre()?>">
      </div>

      <div class="form-group col-md-6 offset-3" style="margin-bottom: 20px">
        <label>Message :</label>
         <textarea class="form-control" name="message" cols="30" rows="10"><?= $forum_update->getMessage()?></textarea>
      </div>

      <div class="form-group col-md-6 offset-3" style="margin-bottom: 20px">
        <label>Topic :</label>
        <input class="form-control" type="text" name="topic" value="<?= $forum_update->getTopic()?>">
      </div>

      <div class="form-group col-md-6 offset-3" style="margin-bottom: 20px">
        <label>Post :</label>
        <input class="form-control" type="text" name="post" value="<?= $forum_update->getPost()?>">
      </div>

      <div class="form-group col-md-6 offset-3" style="margin-bottom: 40px">
        <label>Date :</label>
        <input class="form-control" type="date" name="date" value="<?= $forum_update->getDate()?>">
      </div>

      <input type="submit" class="btn btn-outline-info btn-block btnsubmit col-md-6 offset-3" value="Envoyer" />
    </form><br><br>
  </div>
</body>
</html>