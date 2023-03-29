<?php

require_once 'bdd/pdo.php';

try {
    // connect to the database
    $pdo = new PDO(
        $dsn,
        $dbUser,
        $dbPassword,
        [
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);

    // prepare an SQL statement to update a record in the database
    $stmt = $pdo->prepare("UPDATE mytable SET languageCode = :languageCode, languageName = :languageName WHERE id = :id");

    // bind the values for the parameters in the SQL statement
    $stmt->bindParam(":languageCode", $value1);
    $stmt->bindParam(":languageName", $value2);
    $stmt->bindParam(":id", $id);

    // set the values of the variables used in the SQL statement
    $value1 = "es";
    $value2 = "Espagnol";
    $id = 4;

    // execute the SQL statement
    $stmt->execute();

    echo "Record updated successfully";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

