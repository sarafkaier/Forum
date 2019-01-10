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
        <label>Auteur : </label>
        <input class="form-control" type="text" name="auteur" value="<?= $commentaire_update->getAuteur()?>">
      </div>

      <div class="form-group col-md-6 offset-3" style="margin-bottom: 20px">
        <label>Message :</label>
         <textarea class="form-control" name="message" cols="30" rows="10"><?= $commentaire_update->getMessage()?></textarea>
      </div>
      
      <input type="submit" class="btn btn-outline-info btn-block btnsubmit col-md-6 offset-3" value="Envoyer" />
    </form><br><br>
  </div>
</body>
</html>