<?php session_start();
$pdo = new PDO('mysql:host=localhost;dbname=gbaf', 'root', '');
$pdo->exec('SET NAMES UTF8');

