<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/index.css" media="screen" type="text/css">
    <title>Formulaire login</title>
</head>
<body>
    <div class="left">
    <h1>Bienvenue</h1>
        <img src="../public/images/logo.png" alt="Logo" width=500px>
        
    </div>
    <div id="container">
        <form action="accueil.php" method="post">
            <h1>Se connecter</h1>
            <label for="nom"><h3>Nom d'utilisateur</h3></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="nom" required>

            <label for="Mot de passe"><h3>Mot de passe</h3></label>
            <input type="password" placeholder="Entrer le mot de passe" name="Mot de passe" required>

            <input type="submit" id='submit' value='LOGIN' >
            <h4><a href="Mdpo.php"> Mot de passe oublié ? </a></h4>
            <h4 id="signup"><a href="SignUp.php"> Créer<b>_</b>un<b>_</b>compte </a></h4>
            <h4 id="aide"><a href="Aide.php"> Aide(?) </a></h4>

        </form>
    </div>
</body>
</html>