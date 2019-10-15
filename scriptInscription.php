<?php
$bdd = new PDO('mysql:host=mariadb;dbname=application;charset=utf8', 'jdoe', 'secret');

$pseudo = $_POST['pseudo'];
$motDePasse = $_POST['motDePasse'];

// Requête préparée pour empêcher les injections SQL
$requete = $bdd->prepare("SELECT pseudo FROM utilisateurs WHERE pseudo=:pseudo AND motDePasse=:motdepasse");
$requete->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
$requete->bindValue(':motdepasse', $motDePasse, PDO::PARAM_STR);
$requete->execute();

if ($requete->fetch()){
    echo "Utilisateur existant";
} else {
    $requete = $bdd->prepare("INSERT INTO utilisateurs (pseudo, motDePasse, statutAdmin) VALUES (:pseudo, :motDePasse, :statutAdmin)");

$statutAdmin=0;

$requete->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
$requete->bindValue(':motDePasse', $motDePasse, PDO::PARAM_STR);
$requete->bindValue(':statutAdmin', $statutAdmin, PDO::PARAM_INT);

$requete->execute();

echo "Done";
};


$requete->closeCursor();