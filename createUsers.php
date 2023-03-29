<?php
require_once 'db/pdo.php';

$login = "Claire";
$password = "bonjour";

$query = "INSERT INTO users VALUES (null, :pseudo, :pass)";

$stmt = $pdo->prepare($query);

$insert = $stmt->execute([
  'pseudo' => $login,
  'pass' => password_hash($password, PASSWORD_DEFAULT)      //对密码进行加密
]);

if ($insert) {
  echo "Utilisateur enregistré";
} else {
  echo "Échec lors de l'insertion";
}