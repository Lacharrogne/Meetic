<?php

class MyDatabase{
    private $nom;
    private $prenom;
    private $date;
    private $genre;
    private $ville;
    private $email;
    private $pass;
    private $loisir;


    public function __construct($nom,$prenom,$date,$genre,$ville,$email,$pass,$loisir)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date = $date;
        $this->genre = $genre;
        $this->ville = $ville;
        $this->email = $email;
        $this->pass = $pass;
        $this->loisir = $loisir;
    }


    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getDate(){
        return $this->date;
    }
    public function getGenre(){
        return $this->genre;
    }
    public function getVille(){
        return $this->ville;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPass(){
        return $this->pass;
    }
    public function getLoisir(){
        return $this->loisir;
    }


    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function setDate($date){
        $this->date = $date;
    }
    public function setGenre($genre){
        $this->genre = $genre;
    }
    public function setVille($ville){
        $this->ville = $ville;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setPass($pass){
        $this->pass = $pass;
    }
    public function setLoisir($loisir){
        $this->loisir = $loisir;
    }
    

    public function estValide(){
        return !empty($this->nom)&&!empty($this->prenom)&&!empty($this->date)&&!empty($this->genre)&&!empty($this->ville)&&!empty($this->email)&&!empty($this->pass)&&!empty($this->loisir);
    }
    public function estEmailValide(){
        return filter_var($this->email, FILTER_VALIDATE_EMAIL);
    }
}