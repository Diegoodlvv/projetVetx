<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=users", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connexion réussi";
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

if (isset($_POST['recup'])) {
    var_dump($_POST);
    $nom = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['Phone'];
    $service = $_POST['services'];
    $Date = $_POST['visitDate'];
    $Time = $_POST['schedule'];
    $Message = $_POST['messages'];

    $requete = $bdd->prepare("INSERT INTO utilisateurs VALUES(:nom,:email,:telephone,:services,:date_de_visite,:heure_de_visite,:message_utilisateur)");
    $requete->execute(
        array(
            "nom" => $nom,
            "email" => $email,
            "telephone" => $phone,
            "services" => $service,
            "date_de_visite" => $Date,
            "heure_de_visite" => $Time,
            "message_utilisateur" => $Message
        )
    );

    $reponse = $requete->fetchAll(PDO::FETCH_ASSOC);
    var_dump($reponse);
}
