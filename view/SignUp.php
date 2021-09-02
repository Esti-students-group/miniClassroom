<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/SignUp.css" media="screen" type="text/css" media="screen" type="text/css">
    <title>Créer un compte</title>
</head>
<body>
<div id="container">
    <div id="left">
        <h1>Bienvenue</h1><br>
        <img src="../public/images/logo.png" alt="Logo" width=300px><br><br><br>
        <h2>"Veuillez remplir ce formulaire pour vous inscrire sur la plaetforme Mini-Classroom.</h2>
        <h2>Si vous avez déjà un compte, cliquez sur se connecter.</h2>
        <h2>Merci d'avoir utilisé notre plateforme."</h2>
    </div>
    <div id="formulaire">
        <form action="accueil.php" method="post">
            <h1>S'inscrire</h1>
            <label for="nom"><h3>Nom d'utilisateur</h3></label>
            <input type="text" placeholder="Entrer votre nom d'utilisateur" name="nom" required>
            

            <label for="Mot de passe"><h3>Mot de passe</h3></label>
            <input type="password" placeholder="Entrer votre nouveau mot de passe" name="Mot de passe" required>

            <label for="Niveau"><h3> Niveau </h3> </label>
            <input type="radio" name="niveau" id="niveau">L1
            <input type="radio" name="niveau" id="niveau">L2
            <input type="radio" name="niveau" id="niveau">L3
            <br>
            <label for="sexe"><h3>Sexe</h3></label>
            <input type="radio" name="sexe" id="masculin">Masculin <br>
            <input type="radio" name="sexe" id="feminin">Féminin
            <br><br>

            <label for="ep"><h3>Êtes-vous étudiant ou professeur ? </h3></label>
            <input type="radio" name="ep" id="etudiant">Etudiant <br>
            <input type="radio" name="ep" id="prof">Professeur <br><br>
            

            <input type="submit" id='submit' value="SOUMETTRE L'INSCRIPTION" >
            <h4><a href="Mdpo.php"> Mot de passe oublié ? </a></h4>
            <h4 id="aide"><a href="Aide.php"> Aide(?) </a></h4>
            <h1 id="login"><a href="index.php"> Se<b>_<b>connecter</a></h1>
        </form>
    </div>
    
</div>
</html>