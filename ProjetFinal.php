<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=users", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussi !";
} catch (PDOException $e) {
    echo "Erreur :" . $e->getMessage();
}

if (isset($_post['ok'])) {
    extract($_post);
    $nom = $_post['nom'];
    $email = $_post['email'];
    $phone = $_post['phone'];
    $service = $_post['services'];
    $Date = $_post['visitDate'];
    $Time = $_post['schedule'];
    $Message = $_post['messages'];

    $requete = $bdd->prepare("INSERT INTO users VALUES(:nom,:email,:phone,:services,:visitDate,:schedule,:messages)");
    $requete->execute(
        array(
            "nom" => $nom,
            "email" => $email,
            "phone" => $phone,
            "service" => $service,
            "Date" => $Date,
            "Time" => $Time,
            "Message" => $Message
        )
    );

    $reponse = $requete->fetchAll(PDO::FETCH_ASSOC);
    var_dump($reponse);
}
