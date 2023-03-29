<?php

require_once 'bdd/pdo.php';

// Create connection  - Gestion de langues (Liste, Ajout, Modification, Suppression)
// $conn = new mysqli($dsn, $dbUser, $dbPassword, $dbname);
// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// $langId = "1";
// $langCode = "En";
// $langName = "English";

// $langId = "2";
// $langCode = "Fr";
// $langName = "French";

// $langId = "3";
// $langCode = "Zh";
// $langName = "Chinese";

$langId = "5";
$langCode = "En";
$langName = "English";
// in order to verify if there is an douplicate
$result = $pdo->prepare("SELECT * FROM languages WHERE languageName= :langName");
$count = $result->execute([
  'langName'=>$langName]);
var_dump($count);
if($count==0){
  $stmt = $pdo->prepare("INSERT INTO languages (languageId, languageCode, languageName)
VALUES 
(:languageId,:languageCode,:languageName)");

$stmt->bindParam(":languageId",$langId);
$stmt->bindParam(":languageCode",$langCode);
$stmt->bindParam(":languageName",$langName);
if ($stmt->execute()) {
  echo "New record created successfully";
} else{
  echo "Unable to create record";
}
}else{
  echo "The languages already exists"
}
}


?>