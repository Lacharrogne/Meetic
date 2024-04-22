<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/styleCarrousel.css">

    <?php include '../logique/sql.php';?>
    <title>Document</title>
</head>
<body>
    <nav>
        <h1>je recherche:</h1>
        <form action="#" method="POST">
        Genre: <select name="genre2">
                    <option value="vide">...</option>
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                    <option value="Autre">Autre</option>
                </select>
        Ville: <input type="text" name="ville2">
        Loisir: <select name="loisir2">
                    <option value="vide">...</option>
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
                <input id="btn" type="submit" value="search">
        </form>
    </nav><?php

    $genre2 = $_POST["genre2"];
    $ville2 = $_POST["ville2"];
    $loisir2 = $_POST["loisir2"];

    if($genre2 != "vide" || $ville2 != null || $loisir2 != "vide"){

        if($genre2 != "vide" && $ville2 == null && $loisir2 == "vide"){
            $req2 = "SELECT * FROM user WHERE gender = '$genre2'";
            $result2 = $db->query($req2);
            $articles2 = $result2->fetchAll(PDO::FETCH_ASSOC);
        }
        elseif($genre2 == "vide" && $ville2 != null && $loisir2 == "vide"){
            $req2 = "SELECT * FROM user WHERE city = '$ville2'";
            $result2 = $db->query($req2);
            $articles2 = $result2->fetchAll(PDO::FETCH_ASSOC);
        }
        elseif($genre2 == "vide" && $ville2 == null && $loisir2 != "vide"){
            $req2 = "SELECT * FROM user WHERE loisir = '$loisir2'";
            $result2 = $db->query($req2);
            $articles2 = $result2->fetchAll(PDO::FETCH_ASSOC);
        }
        elseif($genre2 != "vide" && $ville2 != null && $loisir2 = "vide"){
            $req2 = "SELECT * FROM user WHERE gender = '$genre2' AND city = '$ville2'";
            $result2 = $db->query($req2);
            $articles2 = $result2->fetchAll(PDO::FETCH_ASSOC);
        }
        elseif($genre2 == "vide" && $ville2 != null && $loisir2 != "vide"){
            $req2 = "SELECT * FROM user WHERE city = '$ville2' AND loisir = '$loisir2'";
            $result2 = $db->query($req2);
            $articles2 = $result2->fetchAll(PDO::FETCH_ASSOC);
        }
        elseif($genre2 != "vide" && $ville2 == null && $loisir2 != "vide"){
            $req2 = "SELECT * FROM user WHERE gender = '$genre2' AND loisir = '$loisir2'";
            $result2 = $db->query($req2);
            $articles2 = $result2->fetchAll(PDO::FETCH_ASSOC);
        }
        elseif($genre2 != "vide" && $ville2 != null && $loisir2 != "vide"){
            $req2 = "SELECT * FROM user WHERE gender = '$genre2' AND city = '$ville2' AND loisir = '$loisir2'";
            $result2 = $db->query($req2);
            $articles2 = $result2->fetchAll(PDO::FETCH_ASSOC);
        }
    }?>
    
    <div class="carrousel">
        <?php foreach ($articles2 as $b): ?>
            <div class="slide">
                <div class="heart-square">
                    <div class="heart-circle"></div>
                    <div class="heart-circle"></div>
                </div>
                <p>Nom: <?= $b["lastname"];?></p> 
                <p>Prénom: <?= $b["firstname"];?></p> 
                <p>Date de naissance: <?= $b["birthdate"];?></p> 
                <p>Genre: <?= $b["gender"];?></p> 
                <p>Ville: <?= $b["city"];?></p> 
                <p>Loisir: <?= $b["loisir"];?></p>
            </div>
        <?php endforeach;?>
    </div>
    
    <button id="prev">💘</button>
    <button id="next">💘</button>

    <script src="../script/scriptCarrousel.js"></script>
</body>
</html>