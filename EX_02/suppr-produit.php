<?php
function connect_to_database()
{
    $servername = "localhost";
    $username = "Summer";
    $password = "2020";
    $databasename = "BaseTest01";

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Connexion validée";
        return $pdo;
    } catch (PDOException $e) {
        echo "Connexion non validée" . $e->getMessage();
    }
}

$pdo = connect_to_database();

$sql2 = "DELETE FROM Produit WHERE `nom` = 'T-shirt noir'";

try {
    $pdo->exec($sql2);
    echo "La ligne à bien été supprimée";
} catch (PDOException $e) {
    echo "Erreur de suppression" . $e->getMessage();
}
