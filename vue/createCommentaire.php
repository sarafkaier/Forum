<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ajout de commentaires</title>
    <!-- Bootstrap -->
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
      <h1 style="text-align: center; margin-bottom: 25px; margin-top: 10px;">Ajouter des commentaires</h1>
      <div class="card col-md-8 offset-2">
        <div class="card-body">
          <div class="row">
            <div class="col-md-8 offset-2">
              <form method="post">
            
                <div class="form-group" style="margin-bottom: 20px">
                  <label for="nom">Auteur : </label>
                  <input class="form-control" type="text" name="auteur">
                </div>

                <div class="form-group" style="margin-bottom: 20px">
                  <label for="nom">Message : </label>
                <textarea class="form-control" name="message" cols="30" rows="10"></textarea>
                </div>

                <input type="submit" class="btn btn-outline-info btn-block btnsubmit" value="Envoyer"/>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>