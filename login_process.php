<?php
session_start();
$_SESSION['isConnected']=false;
require_once 'layout/header.php';
require_once 'layout/navbar.php';
require_once 'bdd/pdo.php';

if(isset($_POST['email'])&&isset($_POST['pwd'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


$email = validate($_POST['email']);
$password = validate($_POST['pwd']);

if (empty($email)){
    header("Location:login.php?error=User Name is required");
    exit();
}else if(empty($password)){
    header("Location:login.php?error=Password is required");
}else{
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $result = $stmt->execute([
    'email'=>$email]);
    $user = $stmt ->fetch();

    if($user){
        $hashedPassword=$user['pwd'];
        if (password_verify($password , $hashedPassword)){
            $_SESSION['isConnected'] = true;
            echo "Hello ".$user['userName'].""; 
            header("Location:index.php?name=".$user['userName']);
            exit();
        }else{
            header("Location:login.php?error=Incorrect User name or password");
            exit();
        }
    }else{
        header("Location:login.php?error=Incorrect User name or password");
        exit();
    }
}
}
?>
 


