<?php
include 'class.php';
include 'sql.php';

if (isset($_POST["charger"])){

    $nom1 = $_POST["nom"];
    $prenom1 = $_POST["prenom"];
    $date1 = $_POST["date"];
    $genre1 = $_POST["genre"];
    $ville1 = $_POST["ville"];
    $email1 = $_POST["email"];
    $pass1 = md5($_POST["pass"]);
    $loisir1 = $_POST["loisir"];

    $utilisateur1 = new MyDatabase($nom1,$prenom1,$date1,$genre1,$ville1,$email1,$pass1,$loisir1);

    if (!$utilisateur1->estValide()){
        echo "Veuillez saisir tous les champs";
    }elseif (!$utilisateur1->estEmailValide()){
        echo "Veuillez saisir un email valide";
    }else{
        $sql = "INSERT INTO user (lastname,firstname,birthdate,gender,city,email,pass,loisir) VALUES (:nom, :prenom, :date, :genre, :ville, :email, :pass, :loisir)";
        $stmt = $db->prepare($sql);

        if ($stmt){
            $stmt->bindParam(':nom',$nom1);
            $stmt->bindParam(':prenom',$prenom1);
            $stmt->bindParam(':date',$date1);
            $stmt->bindParam(':genre',$genre1);
            $stmt->bindParam(':ville',$ville1);
            $stmt->bindParam(':email',$email1);
            $stmt->bindParam(':pass',$pass1);
            $stmt->bindParam(':loisir',$loisir1);

            $stmt->execute();
        }
    }
}