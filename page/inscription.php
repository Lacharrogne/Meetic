<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/styleInscription.css">
    <?php include '../logique/create.php';?>
    <title>Inscription</title>
</head>
<body>
    <nav>
        <div id="containerNav">
            <img src="/img/meetic-logo.png" alt="">
            <div id="containerRecherche">
                <h1>Je recherche une personne:</h1>
                <h1 id="target"></h1>
            </div>
            <div id="container_a">
                <a href="inscription.php">Inscription</a>
                <a href="connexion.php">Connexion</a>
            </div>
        </div>
    </nav>
    <main>
        <div id="containerMain">
            <h1>Inscription</h1>
            <form action="compte.php" method="post">
                
                Nom: <input type="text" name="nom">
                Prénom: <input type="text" name="prenom">
                Date de naissance: <input type="date" name="date">
                
                Genre: <select name="genre">
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                    <option value="Autre">Autre</option>
                </select>

                Ville: <input type="text" name="ville">
                Email: <input type="email" name="email">
                Mot de passe: <input type="password" name="pass">
                Loisir: <select name="loisir">
                    <option value="sport">sport</option>
                    <option value="musique">musique</option>
                    <option value="cinema">cinema</option>
                    <option value="jeux-video">jeux-video</option>
                    <option value="lecture">lecture</option>
                    <option value="animaux">animaux</option>
                    <option value="voyage">voyage</option>
                    <option value="voiture">voiture</option>
                    <option value="dessin">dessin</option>
                    <option value="autres">autres</option>
                </select>
                <input id="btn" type="submit" name="charger" value="create">
            </form>
        </div>
    </main>
    <script src="../script/scriptDefile.js"></script>
</body>
</html>