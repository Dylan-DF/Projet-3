<?php session_start();
$pdo = new PDO('mysql:host=localhost;dbname=gbaf', 'root', '');
$pdo->exec('SET NAMES UTF8');

require_once "fonction.php";
$id_acteur = (int) $_GET["actor"];
$note = (int) $_GET["note"];
$user_id = getUserId();

$note = $note > 0 ? 1 : -1;
$sql = $pdo->prepare
    (
        'INSERT INTO vote (id_user, id_acteur, vote)
        VALUES (:id_user,:id_acteur,:vote)
        ON DUPLICATE KEY UPDATE vote = :vote'
    );

$sql->execute([
    "id_user"=>$user_id,
    "id_acteur"=>$id_acteur,
    "vote"=>$note,
]);
header('Location: acteur.php?id='. $id_acteur);      