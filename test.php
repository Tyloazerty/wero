<?php
// Détails de connexion à la base de données
$host = 'sql7.freesqldatabase.com';
$dbname = 'sql7756512';
$user = 'sql7756512';
$password = 'iWhSfG8np5';
$port = '3306';

// Connexion à PostgreSQL
$conn = pg_connect("host=$host dbname=$dbname user=$user password=$password port=$port");

if (!$conn) {
    die("Échec de la connexion à la base de données : " . pg_last_error());
} else {
    echo "Connexion réussie à la base de données PostgreSQL sur Render !";
}
?>
