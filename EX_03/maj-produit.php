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

$sql= "UPDATE `Produit` SET `quantité`= 1 WHERE id = 4";
try {
    $pdo -> exec($sql);
echo "La ligne à été mis à jour";
}catch (PDOException $e){
    echo "Erreur de mis à jour" . $e->getMessage();
}
