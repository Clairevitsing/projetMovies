<?php
require_once 'bdd/pdo.php';
require_once 'layout/header.php';
require_once 'layout/navbar.php';

// $pseudo = "Claire";
// $email = "vitsing@gmail.com";
// $pass = "bonjour";

// $pseudo = "Ange";
// $email = "ange@gmail.com";
// $pass = "elephant";

// $pseudo = "Ange";
// $email = "ange@gmail.com";
// $pass = "elephant";

// $pseudo = "Jade";
// $email = "jade@yahoo.com";
// $pass = "singe0727";

$pseudo = "Paul";
$email = "paul@yahoo.com";
$pass = "dragon0101";

$query = $pdo->prepare("SELECT * FROM users WHERE email = :email");
$count = $query->execute([
  'email'=>$email]);
// var_dump($count);
$test = $query->fetch();


if ($test !== false) {
   echo 'Email already exists, you can try loggin with the email.';
   header("Location:displayUsers.php");
}else{
  $query = "INSERT INTO users VALUES (null, :userName,:email, :pwd, :photo)";
  $stmt = $pdo->prepare($query);
  $insert = $stmt->execute([
  'userName' => $pseudo,
  'email' => $email,
  'pwd' => password_hash($pass, PASSWORD_DEFAULT)      //对密码进行加密
  'photo'
  ]);
  //how to insert the photos
  if (isset($_POST['signup'])){
    $file = $_FILES['file'];

    $photoName = $_FILES['file']['Name'];
    $photoTmpName = $_FILES['file']['tep_name'];
    $photoSize = $_FILES['file']['size'];
    $photoError = $_FILES['file']['error'];
    $photoName = $_FILES['file']['Name'];
    
    $photoExt = explode('.',$photoName);
  }


  if ($insert){
  echo "User is registered!";
  header("Location:displayUsers.php");
}else{
  echo "unable to register!";
  header("Location:login.php");
}
}
  