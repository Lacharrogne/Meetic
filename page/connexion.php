<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/styleConnexion.css">
    <title>Connexion</title>
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
                <a href="/page/inscription.php">Inscription</a>
                <a href="/page/connexion.php">Connexion</a>
            </div>
        </div>
    </nav>
    <main>
        <div id="containerMain">
            <h1>Connexion</h1>
            <form action="compte.php" method="post">
                Email: <input type="email" name="email">
                Mot de passe: <input type="password" name="pass">
                <input id="btn" type="submit" name="charger" value="login">
            </form>
        </div>
    </main>
    <script>giogupiguip</script>
    <script src="../script/scriptDefile.js"></script>
</body>
</html>