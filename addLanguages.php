<?php

require_once 'bdd/pdo.php';

// Create connection  - Gestion de langues (Liste, Ajout, Modification, Suppression)
$conn = new mysqli($dsn, $dbUser, $dbPassword, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO languages(languageCode, languageName)
VALUES 
('En','English'),
('Fr','French'),
('Zh','Chinese'),
('De','Germany')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>