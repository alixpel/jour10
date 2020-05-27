<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Titre du formulaire</title>
    <!--  bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- CSS : -->
    <link rel="stylesheet" href="style.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Fascinate&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,200;0,300;0,400;0,500;0,577;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,577;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <body>
    <header>
      <img src="img/logoformulaire.png" alt="logo">
    </header>

    <div class="hr-div">

    </div>

    <div class="container">

      <div class="message-bonjour">
        <h1>Connection</h1>
        <h3>Salut ! &nbsp🪐</h3>
      </div>
      <div class="form">

        <h2>formulaire de connection</h2>

        <form class="" action="message.php" method="get">

          <!-- Fonctions -->
        <?php if (!empty($_GET['err']) && $_GET['err'] == 'champ') {
            echo "<div class=\"error\">";
            echo "merci de vérifier que tous les champs soient remplis";
            echo "</div>";
            }
            function addClassErreurChamp($champVide) {
              if (!empty($_GET['problemechamp']) && $_GET['problemechamp'] == $champVide) {
                echo "erreurchamp";
              }
            }
           ?>
           <!-- fin fonctions -->

          <div class="champ <?php addClassErreurChamp("pseudo"); ?>">
            <label for="pseudo">Pseudo : </label>
            <input name="pseudo" type="text"><br>
          </div>

          <div class="champ <?php addClassErreurChamp("password"); ?>">
            <label for="password">Mot de passe : </label>
            <input name="password" type="text"><br>
          </div>

          <button type="submit">Valider</button>

        </form>

      </div>

    </div>

    <footer>
      <p>© alixpelletier</p>
    </footer>
    </body>
    </html>
