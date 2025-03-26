<?php
$dbhost = getenv('MARIADB_HOST') ?: 'mariadb';
$dbname = getenv('MARIADB_DATABASE') ?: 'woodytoys';
$dbuser = getenv('MARIADB_USER') ?: 'woodyuser';
$dbpass = getenv('MARIADB_PASSWORD') ?: 'mypass';

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$connect) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

echo "Connexion réussie à MariaDB !";
?>