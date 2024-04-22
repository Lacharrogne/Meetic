<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/styleCompte.css">
    <?php
        if(!isset($_POST["nom"])){
            include '../logique/sql.php';
            $email1 = $_POST["email"];
            $pass1 = $_POST["pass"];
        }else{
            include '../logique/create.php';
        }
    ?>
    <title>Compte</title>
</head>
<body>
    <?php
        $req = "SELECT * FROM user WHERE email = '$email1' AND pass = '$pass1'";
        $result = $db->query($req);
        $articles = $result->fetchAll(PDO::FETCH_ASSOC);
        
        if($articles == false) {
            include "./error.php";
        }else{
            foreach ($articles as $a){ ?>
            <article>
                <h1>Mon Compte</h1>
                <p>Nom: <?= $a["lastname"];?></p> 
                <p>Prénom: <?= $a["firstname"];?></p> 
                <p>Date de naissance: <?= $a["birthdate"];?></p> 
                <p>Genre: <?= $a["gender"];?></p> 
                <p>Ville: <?= $a["city"];?></p> 
                <p>Email: <?= $a["email"];?></p> 
                <p>Mot de passe: <?= $a["pass"];?></p> 
                <p>Loisir: <?= $a["loisir"];?></p>
                <a href="carrousel.php">Recherche</a>
            </article><?php 
            }
        }?>
</body>
</html>