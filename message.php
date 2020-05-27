<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Titre</title>
    <!--  bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- CSS : -->
    <style>
      h1 {
        text-align: center;
      }
    </style>
  <body>
    <header>
    </header>

    <div class="container">
      <?php
        $nomChampsObligatoires = ["pseudo", "password"];
          foreach ($nomChampsObligatoires as $nomChamp) {
          if (empty($_GET[$nomChamp])) {
            header("location:index.php?err=champ&problemechamp=$nomChamp");
          }
          }
       ?>
    </div>

    <footer>
      <div class="">
        <p>blablabli</p>
      </div>
    </footer>
    </body>
    </html>
