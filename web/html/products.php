<?php
$dbhost = getenv('MARIADB_HOST');
$dbname = getenv('MARIADB_DATABASE');
$dbuser = getenv('MARIADB_USER');
$dbpass = getenv('MARIADB_PASSWORD');

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$connect) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

echo "<h2>Connexion réussie à MariaDB !</h2>";

// Requête pour récupérer les produits
$query = "SELECT * FROM products";
$result = mysqli_query($connect, $query);

if ($result && mysqli_num_rows($result) > 0) {
    echo "<h3>Liste des produits :</h3>";
    echo "<table border='1' cellpadding='8'>";
    echo "<tr>";
    // En-têtes de colonnes dynamiques
    while ($field = mysqli_fetch_field($result)) {
        echo "<th>" . htmlspecialchars($field->name) . "</th>";
    }
    echo "</tr>";

    // Contenu des lignes
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>" . htmlspecialchars($value) . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Aucun produit trouvé dans la table.";
}

// Fermer la connexion
mysqli_close($connect);
?>
