<?php

    $pdo = new PDO('mysql:host=localhost;dbname=gbaf', 'root', '');
    $pdo->exec('SET NAMES UTF8');

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $question = $_POST['question'];
    $reponse = $_POST['reponse'];


    $query = $pdo->prepare
    (
         'INSERT INTO account (nom, prenom, username, password, question, reponse)
        VALUES (?,?,?,?,?,?)'
    );

    $query->execute([$nom,$prenom,$username,$password,$question,$reponse]);

    echo "vous avez bien été enregistré";