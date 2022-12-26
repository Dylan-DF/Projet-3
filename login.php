<?php session_start();
$pdo = new PDO('mysql:host=localhost;dbname=gbaf', 'root', '');
$pdo->exec('SET NAMES UTF8');
require_once "fonction.php";

if(!empty($_POST['username']) AND !empty($_POST['password'])){
    $username = ($_POST['username']);
    $password = ($_POST['password']);
    
    $recupUser = $pdo->prepare('SELECT * FROM account WHERE username = ? AND password = ?');
    $recupUser->execute(array($username, $password));

    if($user=$recupUser->fetch()){ 
        $_SESSION["user"] = $username;
        $_SESSION["id_user"] = $user["id_user"];
        header('Location: index.php');    
    }else{
        echo "Mot de passe ou utilisateur incorrect";
    }
}


?>