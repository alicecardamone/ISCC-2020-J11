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

$sql = "INSERT INTO Produit (id, nom, descri, prix, quantité) 
VALUES ('8', 'T-shirt noir', 'T-shirt coton de couleur noire', '15.50', '10')";

try {
    $pdo->exec($sql);
    echo "Entrée ajoutée à la table";
} catch (PDOException $e) {
    echo "Erreur d'ajout" . $e->getMessage();
}
